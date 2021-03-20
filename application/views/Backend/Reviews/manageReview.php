
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('BReview') ?>">Review</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Manage Reviews</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Add Review Form</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="post" enctype="multipart/form-data" autocomplete="off" id="formAddSProduct">
                        <div class="form-group row mb-4">
                            <label for="txtReviewTopic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Review Topic</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtReviewTopic" name="txtReviewTopic">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtReviewDescription" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Review Description</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtReviewDescription" name="txtReviewDescription">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtReviewerName" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Reviewer Name</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtReviewerName" name="txtReviewerName">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtReviewerDesignation" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Reviewer Designation</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtReviewerDesignation" name="txtReviewerDesignation">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtReviewerImage" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Reviewer Image (Square)</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <div class="custom-file-container" data-upload-id="reviewerImage">
                                    <label><a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">Clear Image</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="txtReviewerImage" id="txtReviewerImage" accept="image/*">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary mt-3">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br/>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="tblReviews" class="table table-hover" style="width:100%">
                        </table>
                    </div>
                </div>

                <br/>
                <div id="updateDiv">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Edit Flavour Form</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <form method="post" autocomplete="off" id="formUpdateSProduct">
                            <div class="form-group row mb-4">
                                <label for="txtUReviewTopic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Review Topic</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUReviewTopic" name="txtUReviewTopic">
                                    <input type="hidden" class="form-control" id="txtUReviewID" name="txtUReviewID">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="txtUReviewDescription" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Review Description</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUReviewDescription" name="txtUReviewDescription">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="txtUReviewerName" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Reviewer Name</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUReviewerName" name="txtUReviewerName">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="txtUReviewerDesignation" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Reviewer Designation</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUReviewerDesignation" name="txtUReviewerDesignation">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="cmbVisibility" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Review Visibility</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <select class="form-control" id="cmbVisibility" name="cmbVisibility">
                                        <option value="1">Activate</option>
                                        <option value="0">Deactivate</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    let dTable;

    function edit(id){
        $('#updateDiv').show()

        $.ajax({
            url: "<?php echo base_url(''); ?>/BReview/getReviewData",
            data: {ID : id},
            method: "post",
            dataType: "json",
            error: function(error){
                console.log(error);
                $.notify("Internal server error", "error");

            },
            success: function(r){

                $('#txtUReviewTopic').val(r.data[0].review_topic);
                $('#txtUReviewDescription').val(r.data[0].review_description);
                $('#txtUReviewerName').val(r.data[0].reviewer_name);;
                $('#txtUReviewID').val(r.data[0].review_id);
                $('#txtUReviewerDesignation').val(r.data[0].reviewer_designation);

                $('#cmbVisibility').val(r.data[0].review_status);
                $('#cmbVisibility').trigger('change');
            }
        });
    }

    function del(id){
        $.confirm({
            icon: 'fa fa-trash',
            title: 'Delete Review',
            content: 'Do you want to delete this review details?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                confirm: {
                    text: 'Delete',
                    btnClass: 'btn-red',
                    action: function(){

                        $.ajax({
                            url: "<?php echo base_url(''); ?>/BReview/deleteReview",
                            data: {ID : id},
                            method: "post",
                            dataType: "json",
                            error: function(error){
                                console.log(error);
                                dTable.ajax.reload();
                                dTable.draw();
                                $.notify("Internal server error", "error");

                            },
                            success: function(r){
                                dTable.ajax.reload();
                                dTable.draw();

                                if(r.result){
                                    $.alert({
                                        icon: 'fa fa-check',
                                        title: 'Success',
                                        content: 'Details have deleted',
                                        type: 'green',
                                        btnClass: 'btn-green'
                                    });
                                }else{
                                    $.alert({
                                        icon: 'fa fa-times',
                                        title: 'Error',
                                        content: 'Operation failed',
                                        type: 'red',
                                        btnClass: 'btn-red'
                                    });
                                }
                            }
                        });


                    }
                },
                close: function () {

                }
            }
        });
    }

    $(document).ready(function() {

        dTable = $('#tblReviews').DataTable({
            "processing": true,
            "initComplete": function (settings, json) {
                $("#tblReviews").show();
            },
            "serverSide": true,
            "select": true,
            "searching": true,
            "bDestroy": true,
            "dataSrc": "tableData",
            "columns": [
                {"data": "review_id", "name": "Review ID", "title": "Review ID"},
                {"data": "review_topic", "name": "Review Topic", "title": "Review Topic"},
                {"data": "review_description", "name": "Review Description", "title": "Review Description"},
                {"data": "reviewer_name", "name": "Reviewer Name", "title": "Reviewer Name"},
                {"data": "reviewer_designation", "name": "Reviewer Designation", "title": "Reviewer Designation"},
                {"data": "reviewer_image", "name": "Flavour Image", "title": "Reviewer Image",
                    mRender: function(data) {
                        return '<div class="d-flex">' +
                            '<div class="usr-img-frame mr-2 rounded-circle">'+
                            '<img alt="avatar" class="img-fluid" src="<?php echo base_url(); ?>assets/img/Reviewer/' + data + '">'+
                            '</div>'+
                            '</div>'
                    }
                },
                {"data": "review_status", "name": "Review Active Status", "title": "Review Active Status",
                    mRender: function(data) {
                        if(data === '1'){
                            return '<span class=" shadow-none badge outline-badge-primary">Activated</span>'
                        }
                        if(data === '0'){
                            return '<span class=" shadow-none badge outline-badge-danger">Deactivated</span>'
                        }
                    }
                },
                {"data": "review_id", "name": "Action", "title": "Action",
                    mRender: function (id) {
                        return '<td class="text-center"><ul class="table-controls">\n' +
                            '<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><button onclick="edit(\''+id+'\')" class="btn btn-outline-info" ><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li>\n' +
                            '<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><button onclick="del(\''+id+'\')" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>\n' +
                            '</ul></td>'
                    }
                }
            ],
            "language": {
                "emptyTable": "No subjects to show..."
            },
            "ajax": {
                "url": '<?php echo base_url(''); ?>/BReview/getReviewsForTable',
                "dataType": "json",
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            columnDefs: [ {
                targets: [ 0 ],
                orderData: [ 0, 1 ]
            }, {
                targets: [ 1 ],
                orderData: [ 1, 0 ]
            }, {
                targets: [ 2 ],
                orderData: [ 2, 0 ]
            } ]
        });

        $('#updateDiv').hide()

        new FileUploadWithPreview('reviewerImage')

        $("#formAddSProduct").validate({
            ignore: [],
            rules: {
                txtReviewTopic: {
                    required: true
                },
                txtReviewDescription: {
                    required: true
                },
                txtReviewerName: {
                    required: true
                },
                txtReviewerDesignation: {
                    required: true
                }
            },
            messages: {
                txtReviewTopic: {
                    required: 'Review topic required!'
                },
                txtReviewDescription: {
                    required: 'Review description required!'
                },
                txtReviewerName: {
                    required: 'Reviewer name required!'
                },
                txtReviewerDesignation: {
                    required: 'Reviewer designation required!'
                }
            },
            submitHandler: function (form) {

                let formData = new FormData(form);

                $.ajax({
                    url: '<?php echo base_url('BReview/addReview'); ?>',
                    data: formData,
                    dataType: 'json',
                    method: 'post',
                    processData: false,
                    enctype: 'multipart/form-data',
                    contentType: false,
                    cache: false,
                    error: function(error){
                        dTable.ajax.reload();
                        dTable.draw();
                        $.notify("Internal server error", "error");
                    },
                    success: function(r){

                        dTable.ajax.reload();
                        dTable.draw();

                        if(r.status == 200){
                            $.notify(r.message, "success");
                        }

                        if(r.status == 500){
                            $.notify(r.message, "error");
                        }

                    }
                });
            }
        });

        $("#formUpdateSProduct").validate({
            ignore: [],
            rules: {
                txtUReviewTopic: {
                    required: true
                },
                txtUReviewDescription: {
                    required: true
                },
                txtUReviewerName: {
                    required: true
                },
                txtUReviewerDesignation: {
                    required: true
                }
            },
            messages: {
                txtUReviewTopic: {
                    required: 'Review topic required!'
                },
                txtUReviewDescription: {
                    required: 'Review description required!'
                },
                txtUReviewerName: {
                    required: 'Reviewer name required!'
                },
                txtUReviewerDesignation: {
                    required: 'Reviewer designation required!'
                }
            },
            submitHandler: function (form) {

                $.ajax({
                    url: '<?php echo base_url('BReview/updateReview'); ?>',
                    data: $('#formUpdateSProduct').serializeArray(),
                    dataType: 'json',
                    method: 'post',
                    error: function(error){
                        dTable.ajax.reload();
                        dTable.draw();
                        $.notify("Internal server error", "error");
                    },
                    success: function(r){

                        dTable.ajax.reload();
                        dTable.draw();

                        if(r.status == 200){
                            $('#updateDiv').hide()
                            $.notify(r.message, "success");
                            $('#txtServiceName').val("")
                        }

                        if(r.status == 500){
                            $.notify(r.message, "error");
                        }

                    }
                });
            }
        });
    });

</script>
