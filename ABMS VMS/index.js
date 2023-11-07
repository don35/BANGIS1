//For data Tables
$(document).ready(function () {
  $("#table").DataTable();
});

//For modal and add vaccine data
$(document).ready(function () {
  $("#addButton").click(function () {
    // Get the values from the form
    var formData = {
      VaccineName: $("#vaccinename").val(),
      Brand: $("#brand").val(),
      StockQuantity: $("#stockquantity").val(),
      Dosage: $("#dosage").val(),
      ExpirationDate: $("#expirationdate").val(),
      DateAdded: $("#dateadded").val(),
      Remarks: $("#remarks").val(),
    };

    // Validate the form data (you can add more validation if needed)
    if (
      formData.VaccineName &&
      formData.Brand &&
      formData.StockQuantity &&
      formData.Dosage &&
      formData.ExpirationDate &&
      formData.DateAdded &&
      formData.Remarks
    ) {
      $.ajax({
        type: "POST",
        url: "add_vaccine.php",
        data: formData,
        success: function (response) {
          if (response === "success") {
            // Create a new row for the table with the form data
            var newRow =
              "<tr>" +
              "<td>" +
              formData.VaccineName +
              "</td>" +
              "<td>" +
              formData.Brand +
              "</td>" +
              "<td>" +
              formData.StockQuantity +
              "</td>" +
              "<td>" +
              formData.Dosage +
              "</td>" +
              "<td>" +
              formData.ExpirationDate +
              "</td>" +
              "<td>" +
              formData.DateAdded +
              "</td>" +
              "<td>" +
              formData.Remarks +
              "</td>" +
              "<td>" +
              '<button class="btn btn-primary btn-sm edit-vaccine">Edit</button>' +
              '<button class="btn btn-danger btn-sm delete-vaccine">Delete</button>' +
              "</td>" +
              "</tr>";

            $("#table tbody").append(newRow);

            $("#vaccinename").val("");
            $("#brand").val("");
            $("#stockquantity").val("");
            $("#dosage").val("");
            $("#expirationdate").val("");
            $("#dateadded").val("");
            $("#remarks").val("");

            // Close the modal
            $("#staticBackdrop").modal("hide");
          } else {
            Swal.fire("Error", "Failed to add the vaccine.", "error");
          }
        },
        error: function () {
          Swal.fire(
            "Error",
            "An error occurred while processing your request.",
            "error"
          );
        },
      });
    } else {
      Swal.fire("Error", "Please fill in all the fields.", "error");
    }
  });
});

//For Delete Data
$(document).ready(function () {
  $("#table").on("click", ".delete-vaccine", function () {
    var vaccineID = $(this).data("id");

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to recover this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel!",
      confirmButtonColor: "#d33",
    }).then(function (result) {
      if (result.isConfirmed) {
        // Send an AJAX request to delete the record
        $.ajax({
          type: "POST",
          url: "delete_vaccine.php", // Create a new PHP file for deleting records
          data: { VaccineID: vaccineID },
          success: function (response) {
            if (response === "success") {
              // Remove the deleted row from the table
              $("#table")
                .find('[data-id="' + vaccineID + '"]')
                .closest("tr")
                .remove();
              Swal.fire("Deleted!", "The vaccine has been deleted.", "success");
            } else {
              Swal.fire("Error", "Failed to delete the vaccine.", "error");
            }
          },
          error: function () {
            Swal.fire(
              "Error",
              "An error occurred while processing your request.",
              "error"
            );
          },
        });
      }
    });
  });
});

//For Edit Data

$(document).ready(function () {
  // Add click event listener to edit buttons
  $(".edit-vaccine").on("click", function () {
    var vaccineID = $(this).data("id");

    // Send an AJAX request to get_vaccine.php
    $.ajax({
      url: "get_vaccine.php",
      type: "POST",
      data: { id: vaccineID },
      success: function (data) {
        // Append the data to the modal's body
        $(".edit-modal").html(data);

        // Show the edit modal
        $("#editModal").modal("show");
      },
      error: function () {
        // Handle AJAX error
        alert("Error: AJAX request failed.");
      },
    });
  });

  // Add the rest of your JavaScript code here
});
