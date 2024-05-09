function toggleUnderline(event) {
  const anchors = document.querySelectorAll(".item-wrapper nav ul li a");
  anchors.forEach((anchor) => {
    anchor.classList.remove("underline");
  });
  event.target.classList.add("underline");
}

// Wait until the HTML document is fully loaded
document.addEventListener("DOMContentLoaded", function () {
  // Get the elements from the DOM
  const adminToggle = document.getElementById("adminToggle");
  const container = document.querySelector(".container");
  const adminPage = document.querySelector(".admin-wrapper");
  const addBtn = document.querySelector(".add-btn");
  const closeBtn = document.getElementById("close-btn");
  const addContainer = document.getElementById("popupContainer");

  // Function to toggle display of elements
  const toggleDisplay = (element, displayStyle) => {
    element.style.display = displayStyle;
  };

  // Event listener for adminToggle change
  adminToggle.addEventListener("change", function () {
    if (adminToggle.checked) {
      toggleDisplay(container, "none");
      toggleDisplay(adminPage, "block");
    } else {
      toggleDisplay(container, "grid");
      toggleDisplay(adminPage, "none");
    }
  });

  // Event listener for addBtn click
  addBtn.addEventListener("click", function () {
    toggleDisplay(addContainer, "block");
  });

  // Event listener for closeBtn click
  closeBtn.addEventListener("click", function () {
    toggleDisplay(addContainer, "none");
  });
});

$(document).ready(function () {
  $(".update-btn").click(function () {
    var itemId = $(this).data("id");
    $.post("get_item_details.php", { itemId: itemId }, function (response) {
      var item = JSON.parse(response);
      $("#editItemId").val(item.id);
      $("#editItemName").val(item.product_name);
      $("#editItemPrice").val(item.product_price);
      $("#editKilo").prop("checked", item.product_type === "kilo");
      $("#editPcs").prop("checked", item.product_type === "pcs");
      $("#editVegs").prop("checked", item.product_unit === "vegetable");
      $("#editFruit").prop("checked", item.product_unit === "fruit");
      $("#popupContainer1").show();
    });
  });

  $("#close-btn1").click(function () {
    $("#popupContainer1").hide();

    $("#editForm").submit(function (e) {
      e.preventDefault();
      $.post({
        url: "edit.php",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (response) {
          console.log(response);
          $("#popupContainer1").hide();
        },
        error: function (xhr, status, error) {
          console.error(xhr.responseText);
        },
      });
    });
  });
});

/* $(document).ready(function () {
  $(document).on("click", ".add-to-cart", function () {
    $("#PcsModal").show();
  });

  $("#search").on("keyup", function () {
    var searchText = $(this).val();
    $.ajax({
      url: "search.php",
      method: "GET",
      data: { search: searchText },
      success: function (response) {
        $(".card-wrapper").html(response);
      },
    });
  });

  $("#close-btn2").click(function () {
    $("#PcsModal").hide();
  });
}); */

$(function () {
  $(".add-to-cart").on("click", function () {
    $.post("get_item_details.php", { itemId: $(this).attr("add-id") })
      .done(function (response) {
        var item = JSON.parse(response);
        $("#productName").text(item.product_name);
        $("#productPrice").text(`₱${item.product_price}`);
        $("#PcsModal").show();
      })
      .fail(function (xhr) {
        console.error(`Error fetching product details: ${xhr.statusText}`);
      });
  });
  $("#close-btn2").on("click", function () {
    $("#PcsModal").hide();
  });
});
