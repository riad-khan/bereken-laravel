@extends(backpack_view('blank'))
@include('Admin.includes.cdn')
@section('content')
    <main class="main pt-2">
        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/bmi">BMI</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/bmi/results">Result Details</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">All Details</li>
            </ol>
        </nav>

        <section class="container-fluid">
            <h2 class="ml-1">
                <span class="text-capitalize">BMI Result</span>

                <a href="/admin/bmi/create-results"  class="btn btn-primary ml-2">
                    Create Result Details
                </a>


            </h2>
        </section>

        <div class="container-fluid animated fadeIn">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr style="background-color: white">
                        <th>Id</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Bmi From</th>
                        <th>Bmi To</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr style="background-color: white">
                        <th>Id</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Bmi From</th>
                        <th>Bmi To</th>
                        <th>Action</th>

                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Modal -->
        <div  class="modal fade preview-modal" data-backdrop="" id="create_faq" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Create New Result Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="title"
                            bp-field-type="text">
                            <label>Result Title</label>

                            <input type="text" name="result_title" id="title" value="" class="form-control"
                                required>

                        </div>

                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="title"
                            bp-field-type="text">
                            <label>Result Description</label>

                            <textarea name="result_content" id="description" class="form-control"></textarea>

                        </div>


                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="title"
                            bp-field-type="text">
                            <label>BMI From </label>

                            <input type="text" name="bmi_from" id="title" value="" class="form-control"
                                required>

                        </div>
                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="title"
                            bp-field-type="text">
                            <label>BMI To </label>

                            <input type="text" name="bmi_to" id="title" value="" class="form-control"
                                required>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="save" class="btn btn-primary">Save changes</button>
                    </div>


                </div>
            </div>
        </div>

    </main>

    @include('Admin.includes.scripts')
    

    <script>
        function getBmiResult() {
            jQuery(document).ready(function($) {
                $('#example2').DataTable({

                    "language": {
                        "processing": "<img src='http://127.0.0.1:8000/packages/backpack/base/img/spinner.svg' alt='Processing...'>",
                    },
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                    "processing": true,
                    "serverSide": true,
                    "ajax": '/api/getBmiResult'
                });
            });
        }

       


        getBmiResult()
    </script>
@endsection
