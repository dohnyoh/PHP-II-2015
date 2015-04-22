$("#categoryForm").validate({
    debug: true,
    rules: {
        CategoryName: {
            // règles de validation pour CategoryName
            required: true,
            maxlength: 15
        },
        Description: {
            // règles de validation pour Description
            required: true
        }
    }
});
