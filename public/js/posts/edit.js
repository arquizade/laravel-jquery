$(document).ready(function () {
    console.log("jQuery from public/js/posts loaded!");
    // Your custom jQuery logic here

    var formData = {};

    $("#post-edit-form").on("submit", function (e) {
        e.preventDefault();
        var postId = $('input[name="post_id"]').val();
        formData["_token"] = $('input[name="_token"]').val();
        formData["_method"] = $('input[name="_method"]').val();
        $.ajax({
            url: "/posts/" + postId,
            type: "POST",
            data: formData,
            success: function (response) {
                // Handle success
                console.log("Success:", response);
                // Redirect to another page
                window.location.href = "/posts";
            },
            error: function (xhr, status, error) {
                // Handle error
                console.error("Error:", error);
            },
        });
    });

    $(".editable-input").on("input", function () {
        // This will update the value in formData if the input changes
        var inputName = $(this).attr("name"); // Get the name attribute of the input
        var inputValue = $(this).val(); // Get the current value of the input

        // Check if inputName is not undefined
        if (inputName) {
            formData[inputName] = inputValue; // Update the formData object
        }
    });
});
