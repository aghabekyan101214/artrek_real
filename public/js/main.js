class AdminActions {

    constructor() {
        this.token = $('meta[name="csrf-token"]').attr('content');
        this.pic;
    }

    deleteAction(id, prefix) {
        $("#mi-modal").modal('show');
        $("#mi-modal form").attr('action', prefix + id);
    }

    deleteNotif() {
        $(document).find('.alert').hide(1000);
    }

    chooseImage(_this) {
        this.pic = _this;
        $.post( "/admin/getImages", {_token: this.token }, function( data ) {
            $("#myModal .modal-dialog").html(data);
            $('#myModal').modal();
            $('#dataTable').DataTable( {
                drawCallback: function () {
                    console.log( 'Table redrawn '+new Date() );
                }
            } );
        });

    }

    checkImage(hr) {
        let pic = this.pic;
        $(pic).attr('src', hr);
        hr = hr.split('public');
        hr = hr[1];
        $(pic).parent().find('input').val('public' + hr);
        $('#myModal').modal('hide');
    }
}

var admin = new AdminActions();
setTimeout(admin.deleteNotif, 3000);

