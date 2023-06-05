<?php echo $__env->make('Admin.includes.cdn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main pt-2">
        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/bmi">Populator Calculator</a></li>

            </ol>
        </nav>

        <section class="container-fluid">
            <h2 class="ml-1">
                <span class="text-capitalize">Populer Calculator</span>
                <small>Edit Populer Calculator.</small>


            </h2>
        </section>

        <div class="container-fluid animated fadeIn">

            <div class="row">

                <div class="col-md-12 bold-labels">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">

                                
                                    <div class="card-body row">
                                        <div class="form-group col-md-5" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label style="font-size: 20px;">Calculator list</label>

                                            <div id="calculator_list">

                                            </div>



                                        </div>
                                        <div class="col-md-5 ">
                                            <h4>Populer Calculator List</h4>
                    
                                            <input type="hidden" value="1" id="main_calculator">
                    
                    
                                            <div id="sortable" class="mb-5">
                    
                    
                                            </div>
                    
                                        </div>


                                        <div class="col-md-5 ">
                                            <h4>Section Status</h4>

                                            <?php
                                            $status = DB::table('section_control')->select('status')->where('id','=',1)->get();
                                        ?>
                    
                                            <div class="form-check">
                                                <input onchange="changeStatus(1)" <?php echo e($status[0]->status == 1 ? "checked":""); ?> class="status form-check-input" name="category_id" type="checkbox" onchange="populerCalculator(this.value)" value="6" id="calculators">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Is-Active ?
                                                </label>
                                            </div>
                    
                                        </div>

                                       
                                    </div>

                                

                                    

                               


                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        function calculatorList() {
            $.get(`/api/calculator-list`, function(response) {
                $("#calculator_list").html(response);
            })
        }

        calculatorList();

        function populerCalculator(val) {
            let data = {
                calculator_id: val
            }

            axios.post('/api/populerCalculator-submit', data)
                .then((response) => {
                    PopulerCalculator();
                    calculatorList()
                })
        }
        function PopulerCalculator() {
            $.get("/api/populer-list", function(response) {
                $("#sortable").html(response);
            })
        }
        let sortIndex = 0
        PopulerCalculator();
        $(function() {
            $("#sortable").sortable({
                update: function(event, ui) {

                    $.map($(this).find('label'), function(el) {

                        var sorting = $(el).index();
                        let id = el.id
                        let data = {
                            id: id,
                            sorting: sortIndex++
                        }
                        axios.post('/api/update-order', data)
                            .then((response) => {
                                console.log(response.data)
                            })


                    });

                }
            });


        });

        function deletePopuler(val){
            axios.get('/api/delete/populer-list/'+val)
            .then((response)=>{
                PopulerCalculator();
                calculatorList()
            })
        }

        function changeStatus(val){
            var inputElements = document.getElementsByClassName('status');
            let status;

            if(inputElements[0].checked){
                status = 1
            }else{
                status = 0
            }

            let formData = {
                id : val,
                status : status
            }
            axios.post('/api/update-status',formData)
            .then((response)=>{
                console.log(response.data);
            })
        }
      
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(backpack_view('blank'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/Admin/populer_calculator.blade.php ENDPATH**/ ?>