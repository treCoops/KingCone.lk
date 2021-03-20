
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('BMilestone') ?>">Milestone</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Manage Milestones</span></li>
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
                            <h4>Add Milestone Form</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="post" enctype="multipart/form-data" autocomplete="off" id="formAddSProduct">
                        <div class="form-group row mb-4">
                            <label for="txtMilestoneTitle" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Milestone Title</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtMilestoneTitle" name="txtMilestoneTitle">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtMilestoneDescription" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Milestone Description</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtMilestoneDescription" name="txtMilestoneDescription">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtMilestoneDate" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Milestone Date</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" placeholder="Ex. 11, March 2021" id="txtMilestoneDate" name="txtMilestoneDate">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtMilestoneImage" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Milestone Image (170x170)</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <div class="custom-file-container" data-upload-id="milestoneImage">
                                    <label><a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">Clear Image</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="txtMilestoneImage" id="txtMilestoneImage" accept="image/*">
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
                        <table id="tblMilestones" class="table table-hover" style="width:100%">
                        </table>
                    </div>
                </div>

                <br/>
                <div id="updateDiv">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Edit Partner Form</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <form method="post" autocomplete="off" id="formUpdateSProduct">
                            <div class="form-group row mb-4">
                                <label for="txtUMilestoneTitle" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Milestone Title</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUMilestoneTitle" name="txtUMilestoneTitle">
                                    <input type="hidden" class="form-control" id="txtUMilestoneID" name="txtUMilestoneID">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="txtUMilestoneDescription" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Milestone Description</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUMilestoneDescription" name="txtUMilestoneDescription">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="txtUMilestoneDate" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Milestone Date</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" placeholder="Ex. 11, March 2021" id="txtUMilestoneDate" name="txtUMilestoneDate">
                                </div>
                            </div>

<!--                            <div class="form-group row mb-4">-->
<!--                                <label for="cmbVisibility" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Partner Visibility</label>-->
<!--                                <div class="col-xl-10 col-lg-9 col-sm-10">-->
<!--                                    <select class="form-control" id="cmbVisibility" name="cmbVisibility">-->
<!--                                        <option value="1">Activate</option>-->
<!--                                        <option value="0">Deactivate</option>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->

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
            url: "<?php echo base_url(''); ?>/BMilestone/getMilestoneData",
            data: {ID : id},
            method: "post",
            dataType: "json",
            error: function(error){
                console.log(error);
                $.notify("Internal server error", "error");
            },
            success: function(r){

                $('#txtUMilestoneTitle').val(r.data[0].milestone_title);
                $('#txtUMilestoneID').val(r.data[0].milestone_id);
                $('#txtUMilestoneDescription').val(r.data[0].milestone_description);
                $('#txtUMilestoneDate').val(r.data[0].milestone_date);

                console.log($('#txtUMilestoneID').val())

                // $('#cmbVisibility').val(r.data[0].partner_status);
                // $('#cmbVisibility').trigger('change');
            }
        });
    }

    function del(id){
        $.confirm({
            icon: 'fa fa-trash',
            title: 'Delete Milestone',
            content: 'Do you want to delete this mailestone details?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                confirm: {
                    text: 'Delete',
                    btnClass: 'btn-red',
                    action: function(){

                        $.ajax({
                            url: "<?php echo base_url(''); ?>/BMilestone/deleteMilestone",
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

        dTable = $('#tblMilestones').DataTable({
            "processing": true,
            "initComplete": function (settings, json) {
                $("#tblMilestones").show();
            },
            "serverSide": true,
            "select": true,
            "searching": true,
            "bDestroy": true,
            "dataSrc": "tableData",
            "columns": [
                {"data": "milestone_id", "name": "Milestone ID", "title": "Milestone ID"},
                {"data": "milestone_title", "name": "Milestone Title", "title": "Milestone Title"},
                {"data": "milestone_description", "name": "Milestone Description", "title": "Milestone Description"},
                {"data": "milestone_date", "name": "Milestone Date", "title": "Milestone Date"},
                {"data": "milestone_image", "name": "Milestone Image", "title": "Milestone Image",
                    mRender: function(data) {
                        return '<div class="d-flex">' +
                            '<div class="usr-img-frame mr-2 rounded-circle">'+
                            '<img alt="avatar" class="img-fluid" src="<?php echo base_url(); ?>assets/img/Milestone/' + data + '">'+
                            '</div>'+
                            '</div>'
                    }
                },
                {"data": "milestone_id", "name": "Action", "title": "Action",
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
                "url": '<?php echo base_url(''); ?>/BMilestone/getMilestonesForTable',
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

        new FileUploadWithPreview('milestoneImage')

        $("#formAddSProduct").validate({
            ignore: [],
            rules: {
                txtMilestoneTitle: {
                    required: true
                },
                txtMilestoneDescription: {
                    required: true
                },
                txtMilestoneDate: {
                    required: true
                }
            },
            messages: {
                txtMilestoneTitle: {
                    required: 'Milestone title required!'
                },
                txtMilestoneDescription: {
                    required: 'Milestone description required!'
                },
                txtMilestoneDate: {
                    required: 'Milestone date required!'
                }
            },
            submitHandler: function (form) {

                let formData = new FormData(form);

                $.ajax({
                    url: '<?php echo base_url('BMilestone/addMilestone'); ?>',
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
                txtUMilestoneTitle: {
                    required: true
                },
                txtUMilestoneDescription: {
                    required: true
                },
                txtUMilestoneDate: {
                    required: true
                }
            },
            messages: {
                txtUMilestoneTitle: {
                    required: 'Milestone title required!'
                },
                txtUMilestoneDescription: {
                    required: 'Milestone description required!'
                },
                txtUMilestoneDate: {
                    required: 'Milestone date required!'
                }
            },
            submitHandler: function (form) {

                $.ajax({
                    url: '<?php echo base_url('BMilestone/updateMilestone'); ?>',
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
