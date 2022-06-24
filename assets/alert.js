const flashsuccess = $('.flash-data-success').data('flashdata');
const flashinfo = $('.flash-data-info').data('flashdata');
const flasherror = $('.flash-data-error').data('flashdata');

if(flashsuccess)
{
    toastr.options.closeButton = true;
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.options.showDuration = 1000;
    toastr['success'](flashsuccess);
}

if(flashinfo)
{
    toastr.options.closeButton = true;
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.options.showDuration = 1000;
    toastr['info'](flashinfo);
}

if(flasherror)
{
    toastr.options.closeButton = true;
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.options.showDuration = 1000;
    toastr['error'](flasherror);
}