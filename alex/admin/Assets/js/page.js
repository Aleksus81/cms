

var page = {
    ajaxMethod: 'Post',
    
    add: function() {
        var formData = new FormData();
        
        
        formData.append('title', $('#formTitle').val());
        formData.append('content', $('.redactor-editor').html());
        
        $.ajax({
            url: '/admin/page/add/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforSend: function() {
                
                
            },
            success: function(result) {
                
                console.log(result);
            }
        });
    }
};

console.log(page);