$(function () {
    // file for custom js code

    // Ajax csrf token setup
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": csrfToken, // this is defined in app.php as a js variable
        },
    });

    // ajax request to save student
    $("#frm-add-student").on("submit", function () {
        var postdata = $("#frm-add-student").serialize();
        $.ajax({
            url: "/ajax-add-student",
            data: postdata,
            type: "JSON",
            method: "post",
            success: function (response) {
                window.location.href = "/list-students";
            },
        });
    });

    // ajax request to update student
    $(document).on("submit", "#frm-edit-student", function () {
        var postdata = $("#frm-edit-student").serialize();

        $.ajax({
            url: "/ajax-edit-student",
            data: postdata,
            type: "JSON",
            method: "post",
            success: function (response) {
                window.location.href = "/list-students";
            },
        });
    });

    // ajax request to delete student
    $(document).on("click", ".btn-delete-student", function () {
        if (confirm("Are you sure want to delete ?")) {
            var postdata = "student_id=" + $(this).attr("data-id");
            $.ajax({
                url: "/ajax-delete-student",
                data: postdata,
                type: "JSON",
                method: "post",
                success: function (response) {
                    window.location.href = "/list-students";
                },
            });
        }
    });
});
