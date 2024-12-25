$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });

$(document).on('click','.bars_icon',function(){
    $('.sidebar-area').css({'left':'0'});
});

$(document).on('click','.sidebar_close',function(){
    $('.sidebar-area').css({'left':'-100%'});
});

$(document).on('click','.noti_btn',function(){
    $('.noti-toggle').slideToggle();
});

$(document).on('click','.search_btn',function(){
    $('.search-field-box').slideToggle();
});

$(document).on('click','.header_user_btn',function(){
    $('.logut_btn').slideToggle();

	return false;
});


$(document).on('click', '.job_edit_delete_btn', function (e) {
  e.stopPropagation(); 
   
  $('.job_edit_delete_box').not($(this).siblings('.job_edit_delete_box')).slideUp();
 
  $(this).siblings('.job_edit_delete_box').slideToggle();
});
 
$(document).on('click', function () {
  $('.job_edit_delete_box').slideUp();
});


$(document).on('click','.close_modal, .modal_close_overlay', function(){
  $('.modal_main_create_job').hide();
  $('.modal_close_overlay').hide();  
  return false;
})

$(document).on('click','.add_new_btn', function(){
  $('.modal_close_overlay').show(); 
  $('.modal_main_create_job').show(); 
  return false;
})



// File upload get html 

$(document).ready(function() {
    const fileUploadBox = $('.file-upload-box');
    const fileList = $('.file-list');
    const fileInput = $('.file-upload-input');

    // Handle drag and drop events
    fileUploadBox
        .on('dragover dragenter', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass('drag-over');
        })
        .on('dragleave dragend drop', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('drag-over');
        });

    // Handle file selection
    fileInput.on('change', function(e) {
        const files = e.target.files;
        handleSingleFile(files);
    });

    // Handle dropped files
    fileUploadBox.on('drop', function(e) {
        const files = e.originalEvent.dataTransfer.files;
        handleSingleFile(files);
    });

    function handleSingleFile(files) {
        // Ensure only one file is handled
        const file = files[0];

        if (!file) {
            return;
        }

        // Validate file type (allow only images)
        const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!allowedTypes.includes(file.type)) {
            alert('Only image files are allowed!');
            fileInput.val(''); // Clear the input
            return;
        }

        // Clear the existing file list
        fileList.empty();

        // Create progress bar element
        const progressBar = $('<div class="upload-progress"></div>');

        // Create file item element
        const fileItem = $(`
            <div class="file-item">
                <i class="fas fa-file-image file-icon"></i>
                <span class="file-name" title="${file.name}">${file.name}</span>
                <i class="fas fa-times remove-file"></i>
                ${progressBar.prop('outerHTML')}
            </div>
        `);

        fileList.append(fileItem);

        // Remove progress bar after animation
        setTimeout(() => {
            fileItem.find('.upload-progress').remove();
        }, 1000);

        // Handle file removal
        fileItem.find('.remove-file').on('click', function(e) {
            e.stopPropagation();
            fileInput.val(''); // Clear the input
            fileItem.fadeOut(300, function() {
                $(this).remove();
            });
        });
    }
});





$('.eye_password').on('click', function () {
	const passwordInput = $('#password');
	const icon = $(this).find('i');

	if (passwordInput.attr('type') === 'password') {
		passwordInput.attr('type', 'text');
		icon.removeClass('fa-eye').addClass('fa-eye-slash');  
	} else {
		passwordInput.attr('type', 'password');
		icon.removeClass('fa-eye-slash').addClass('fa-eye');  
	}

	return false;
}); 