<!-- main_content -->

<section class="main_content">
    <div class="container">


        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item active" aria-current="page">الزكاة</li>
                            <li class="breadcrumb-item"><a href="#" class="color_purple">برامجنا</a></li>
                            <li class="breadcrumb-item"><a href="#" class="color_purple">الرئيسية</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="heading_with_text">

                    <h3>حاسبة الزكاة</h3>
                    <p>توفر لك حاسبة الزكاة القيام بحساب ودفع زكاتك عبر منصة إحسان</p>

                </div>
            </div>
        </div>





    </div>
</section>



<div class="nav_pills_section">
    <div class="container">



        <div class="tabs_btn_sec mb-5">

            <ul class="nav nav-tabs justify-content-end" role="tablist">

               

                <li class="">
                    <a class=" ctm_round_btn ctm-round-btn-with-border" data-toggle="tab" href="#tabs-2"
                        role="tab">الأسهم<img src="<?php echo config_item('asset'); ?>image/icon-shares-hovered.svg"
                            alt=""></a>
                </li>
				 <li class="ml-3">
                    <a class="  ctm_round_btn ctm-round-btn-with-border active show" data-toggle="tab" href="#tabs-1"
                        role="tab">الصناديق الاستثمارية<img
                            src="<?php echo config_item('asset'); ?>image/icon-investment.svg" alt=""></a>
                </li>

                <!--li class="">
                    <a class=" ctm_round_btn ctm-round-btn-with-border" data-toggle="tab" href="#tabs-3"
                        role="tab">الفضة<img src="<?php echo config_item('asset'); ?>image/icon-gold.svg" alt=""></a>
                </li>

                <li class="">
                    <a class=" ctm_round_btn ctm-round-btn-with-border" data-toggle="tab" href="#tabs-4"
                        role="tab">الذهب<img src="<?php echo config_item('asset'); ?>image/icon-gold.svg" alt=""></a>
                </li>

                <li class="">
                    <a class=" ctm_round_btn ctm-round-btn-with-border" data-toggle="tab" href="#tabs-5"
                        role="tab">المال <img src="<?php echo config_item('asset'); ?>image/icon-money-hovered.svg"
                            alt=""></a>
                </li-->

            </ul>

        </div>


        <div class="row zakat_row_sec">

            <div class="col-md-5">
                <div class="card_summary_section">
                    <div class="card_summary_heading">
                        <h4>الملخص</h4>
                    </div>

                    <div class="">
                        <div class="amount_text d-flex justify-content-center align-items-center m-4">
                            <strong class="mr-2">

                                <span>درهم إماراتي <p class="investment-addon1 m-0"></p></span>

                            </strong>
                            <span>الوعاء الزكوي</span>
                        </div>

                        <div class="amount_input mx-4 mb-2">
                            <div class="ctm_input_set">
                                <input type="text" disabled class="form-control" placeholder="مبلغ إضافي"
                                    name="investment-addon1" id="investment-addon1" value="">
                                <span class="ctm_input_span" aria-hidden="true">AED</span>
                            </div>
                        </div>

                        <div class="text-center mb-3" id="zakat_due_amount">
                            <p>الزكاة المستحقة</p>
							<input type="hidden" name="zakat_due_first" id="zakat_due_first" value="" />
                            <h2 class="sar_txt_content display-2 investment_amount">0</h2>
                            <span class="sar_txt_content">AED</span>
                        </div>
                        <div class="text-center">
                            <a href="" class="ctm_radius_btn">المتابعة للدفع</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-7">
                <div class="claculator_items_section">
                    <div class="claculator_items">
                        <div class="tab-content">

                            <!-- first_tab -->
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="zakat_amount p-4">
                                    <h5>حاسبة زكاة الصناديق الإستثمارية</h5>

                                    <form class="">
                                        <div class="zakat_flex_wrap_content d-flex justify-content-around">
                                            <div class="form-group mx-1">

                                                <div class="ctm_input_set">
                                                    <input type="text" disabled class="form-control investment-addon1"
                                                        value="0">
                                                    <span class="ctm_input_span" aria-hidden="true">AED</span>
                                                </div>

                                            </div>

                                            <div class="form-group mx-1">
                                                <div class="ctm_input_set">
                                                    <input type="number" name="SAR" id="SAR" class="form-control"
                                                        placeholder="القيمة">
                                                    <span class="ctm_input_span" aria-hidden="true">AED</span>
                                                </div>
                                            </div>

                                            <div class="form-group mx-1">
                                                <input type="number" class="form-control" name="number_of"
                                                    id="number_of" placeholder="العدد">
                                            </div>

                                            <div class="form-group mx-1">
                                                <input type="text" class="form-control" name="fund_name" id="fund_name"
                                                    placeholder="اسم السهم">
                                            </div>
                                        </div>
                                        <!--a href=""  class="ctm_radius_btn">أضف للزكاة</a-->
                                        <button type="button" name="add_to_zakat" id="add_to_zakat"
                                            class="ctm_radius_btn">أضف للزكاة</button>

                                        <div
                                            class="gold_rate_txt d-flex justify-content-between align-items-center mt-3 p-2" id="investment_total">
											<input type="hidden" name="investment_total_hidden" id="investment_total_hidden"
                                            <span class="d-flex">AED<p class="m-0 pl-1 investment-addon1">0</p>
                                                </span>
                                            <strong>إجمالي قيمة الصناديق الإستثمارية</strong>
                                        </div>
                                    </form>
                                </div>
                            </div>



                            <!-- second_tab -->

                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="zakat_amount p-4">
                                    <h5>حاسبة زكاة الأسهم</h5>

                                    <form class="">
                                        <div class="d-flex  justify-content-around">
                                            <div class="form-group mx-1">
                                                <div class="ctm_input_set">
                                                    <input type="text" class="form-control" disabled value="0">
                                                    <span class="ctm_input_span" aria-hidden="true">AED</span>
                                                </div>
                                            </div>

                                            <div class="form-group mx-1">
                                                <div class="ctm_input_set">
                                                    <input type="text" class="form-control" name="SAR2" id="SAR2" placeholder="القيمة">
                                                    <span class="ctm_input_span" aria-hidden="true">AED</span>
                                                </div>
                                            </div>

                                            <div class="form-group mx-1">
                                                <input type="email" class="form-control" placeholder="العدد" name="number_of2" id="number_of2">
                                            </div>

                                            <div class="form-group mx-1">
                                                <input type="email" class="form-control" placeholder="اسم السهم" name="fund_name2" id="fund_name2">
                                            </div>
                                        </div>
                                         <button type="button" name="add_to_zakat2" id="add_to_zakat2"
                                            class="ctm_radius_btn">أضف للزكاة</button>

                                        <div
                                            class="gold_rate_txt d-flex justify-content-between align-items-center mt-3 p-2">

                                            <span class="d-flex">AED<p class="m-0 pl-1">0</p></span>
                                            <strong>إجمالي قيمة الأسهم</strong>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- third_tab -->

                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="zakat_amount p-4">
                                    <h5>حاسبة زكاة الفضة</h5>

                                    <div class="ctm_input_set">
                                        <input type="text" class="form-control" placeholder="وزن الفضة">
                                        <span class="ctm_input_span" aria-hidden="true">جرام</span>
                                    </div>

                                    <a href="" class="ctm_radius_btn mt-2">أضف للزكاة</a>
                                </div>
                            </div>

                            <!-- forth_tab -->
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="zakat_amount p-4">
                                    <h5>حاسبة زكاة الذهب</h5>
                                    <div class="row ">
                                        <form class="debit_card_details d-flex justify-content-end w-100">
                                            <div class="form_group mt-1 col-md-4">
                                                <div class="card_dropdown">
                                                    <select class="mdb-select md-form custom-select form-control"
                                                        searchable="Search here..">
                                                        <option value="0" class="" disabled="" selected="">العيــار
                                                        </option>
                                                        <option value="1">عيار 12</option>
                                                        <option value="2">عيار 14</option>
                                                        <option value="3">عيار 18</option>
                                                        <option value="3">عيار 21</option>
                                                        <option value="3">عيار 22</option>
                                                        <option value="3">عيار 24</option>
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form_group mt-1 col-md-5">
                                                <div class="card_validity d-flex">
                                                    <input type="text" class="form-control" placeholder="وزن الذهب">

                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                    <a href="" class="ctm_radius_btn mt-2">أضف للزكاة</a>
                                    <div
                                        class="gold_rate_txt d-flex justify-content-between align-items-center mt-3 p-2">

                                        <span class="d-flex">جرام<p class="m-0 pl-1">0.00</p></span>
                                        <strong>صافي الذهب (24 قيراط)</strong>
                                    </div>
                                </div>
                            </div>

                            <!-- fifth_tab -->
                            <div class="tab-pane" id="tabs-5" role="tabpanel">
                                <div class="zakat_amount p-4">
                                    <h5>حاسبة زكاة المال</h5>
                                    <div class="ctm_input_set">
                                        <input type="text" class="form-control" placeholder="مبلغ النقد">
                                        <span class="ctm_input_span" aria-hidden="true">ريال سعودي</span>
                                    </div>
                                    <a href="" class="ctm_radius_btn mt-2">أضف للزكاة</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>




    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#add_to_zakat").click(function() {      
        var status = false;
        var SAR = $('#SAR').val();
        var number_of = $('#number_of').val();
        var fund_name = $('#fund_name').val();
        if (SAR.length == 0) {       
            $("#SAR").focus();
        } else if (number_of.length == 0) {
            $("#number_of").focus();
        } else if (fund_name.length == 0) {
            $("#fund_name").focus();
        } else {
            status = true;
            if (status) {
                var multi = SAR * number_of;
                var in_per = multi / 100 * 2.5;             
                $('#investment-addon1').val(multi);
                $('.investment-addon1').val(multi);
                $('.investment-addon1').text(multi);
                $('.investment_amount').text(in_per);              
                $('#zakat_due_first').val(in_per);              
                $('#investment_total_hidden').val(multi);              
            }
        }

    });
	/* for second  */
	$("#add_to_zakat2").click(function() {      
        var status = false;
        var SAR2 = $('#SAR2').val();
        var number_of2 = $('#number_of2').val();
        var fund_name2 = $('#fund_name2').val();
        if (SAR2.length == 0) {       
            $("#SAR2").focus();
        } else if (number_of2.length == 0) {
            $("#number_of2").focus();
        } else if (fund_name2.length == 0) {
            $("#fund_name2").focus();
        } else {
            status = true;
            if (status) {
				//zakat_due_amount
				let investment_total1 = $("#investment_total").find('#investment_total_hidden').val();
				
				let first_amount = $("#zakat_due_amount").find('#zakat_due_first').val();
				
              // alert(first_amount);
              // alert(investment_total1);
			    var investment_total2 = SAR2 * number_of2;
                var second_amount = investment_total2 / 100 * 2.5; 
				var total_invest = 	parseInt(investment_total1) + parseInt(investment_total2);		
				var amount = parseInt(first_amount) + parseInt(second_amount);		
		
				$('#investment-addon1').val(total_invest);
                $('.investment-addon1').val(total_invest);
                $('.investment-addon1').text(total_invest);
                $('.investment_amount').text(amount);     
            }
        }

    });
	/* for second  */
});
//add_to_zakat
</script>