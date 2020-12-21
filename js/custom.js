$(function () {
  // templates
  // ###############################
  // Jquery ajax
  // select all
  call_select_all();
  function call_select_all() {
    $.ajax({
      sync: false,
      cache: false,
      method: "POST",
      url: "./scripts/crud/selectAll.php",
      dataType: "json",
    }).done(function (msg) {
      $("#main-ul").children().not(":first").remove();

      msg.forEach((element) => {
        var listTemplate =
          '<div class="parent"><li class="list-group-item d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row justify-content-between align-items-center"><h6><b>';
        listTemplate += element.Item;
        listTemplate +=
          '</b></h6><div class="mt-2 mt-sm-2 mt-md-0 mt-lg-0 mt-xl-0"><button class="btn btn-info edit-button mr-2">Edit</button>';
        listTemplate +=
          '<button data-id="' +
          element.id +
          '" class="btn btn-danger delete-button">Delete</button></div></li><li class="list-group-item bg-light edit-form">';

        // ################
        // form edit
        // ################
        listTemplate +=
          '<div class="d-block d-sm-block d-md-flex d-lg-flex d-xl-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row justify-content-center align-items-center">';
        listTemplate +=
          '<input type="text" class="form-control mr-2" id="exampleInputItem" aria-describedby="emailHelp" placeholder="Enter item" value="' +
          element.Item +
          '">';
        listTemplate +=
          '<div class="mt-2 mt-sm-2 mt-md-0 mt-lg-0 mt-xl-0 d-block d-sm-block d-md-flex d-lg-flex d-xl-flex flex-row">';
        listTemplate +=
          '<button class="btn btn-danger cancel-button mr-2 mt-3 mt-sm-3 mt-md-0 mt-lg-0 mt-xl-0">Cancel</button><button data-id="' +
          element.id +
          '" type="submit" class="btn btn-primary mt-3 mt-sm-3 mt-md-0 mt-lg-0 mt-xl-0 update-button">Submit</button></div></div>';
        listTemplate += "</li></div>";

        $("#main-ul").append(listTemplate);
      });
    });
  }

  // ###############################
  // on click functions
  $(".insert-button").on("click", function (e) {
    e.preventDefault();

    var form = $(".insert-button").parent();
    var insertBtnVal = $("#insert-input").val();
    $.ajax({
      method: "POST",
      url: "./scripts/crud/insert.php",
      data: { insertVal: insertBtnVal },
    }).done(function (msg) {
      call_select_all();
    });
    form[0].reset();
  });

  $(document).on("click", ".delete-button", function () {
    var id = $(this).attr("data-id");
    $.ajax({
      method: "POST",
      url: "./scripts/crud/delete.php",
      data: { itemId: id },
    }).done(function (msg) {
      call_select_all();
    });
  });

  $(document).on("click", ".edit-button", function () {
    $(this).css("display", "none");
    $(this)
      .parent()
      .parent()
      .parent()
      .children()
      .eq(1)
      .removeClass("edit-form");
  });

  $(document).on("click", ".cancel-button", function () {
    $(this).parent().parent().parent().addClass("edit-form");
    $(".edit-button").css("display", "inline");
  });

  $(document).on("click", ".update-button", function () {
    var id = $(this).attr("data-id");
    var updateItemVal = $(this).parent().parent().children().eq(0).val();
    console.log(id);
    $.ajax({
      method: "POST",
      url: "./scripts/crud/update.php",
      data: { updateItem: updateItemVal, updateItemId: id },
    }).done(function (msg) {
      call_select_all();
    });
  });
});
