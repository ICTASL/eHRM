<script type="text/javascript" src="<?php echo public_path('../../scripts/jquery/jquery.autocomplete.js') ?>"></script>
<?php
$encrypt = new EncryptionHandler();
?>
<div class="outerbox">
    <div class="maincontent">

        <div class="mainHeading"><h2><?php echo __("Loan Settlement Summary") ?></h2></div>
        <?php echo message(); ?>
        <form name="frmSearchBox" id="frmSearchBox" method="post" action="" onsubmit="return validateform();">
            <input type="hidden" name="mode" value="search">
            <div class="searchbox">
                <label for="searchMode"><?php echo __("Search By") ?></label>


                <select name="searchMode" id="searchMode">
                    <option value="all"><?php echo __("--Select--") ?></option>
                    <option value="emp_display_name" <?php
        if ($searchMode == "emp_display_name") {
            echo "selected=selected";
        }
        ?> ><?php echo __("Employee Name") ?></option>
                    <option value="ln_ty_name" <?php
                    if ($searchMode == "ln_ty_name") {
                        echo "selected=selected";
                    }
        ?> ><?php echo __("Loan Type Name") ?></option>
                    <option value="emp_nic_no" <?php
                            if ($searchMode == "emp_nic_no") {
                                echo "selected=selected";
                            }
        ?> ><?php echo __("Employee NIC") ?></option>
                </select>

                <label for="searchValue"><?php echo __("Search For") ?></label>
                <input type="text" size="20" name="searchValue" id="searchValue" value="<?php echo $searchValue ?>" />
                <input type="submit" class="plainbtn"
                       value="<?php echo __("Search") ?>" />
                <input type="reset" class="plainbtn"
                       value="<?php echo __("Reset") ?>" id="resetBtn"/>
                <br class="clear"/>
            </div>
        </form>
        <!--        <form name="frmSearchBox" id="frmSearchBox" method="post" action="">
                    <input type="hidden" name="mode" value="search" />
                    <div class="searchbox">
                        <label for="searchMode"><?php echo __("Search By") ?></label>
                        <select name="searchMode" id="searchMode">
                            <option value="all"><?php echo __("--Select--") ?></option>
                            <option value="emp_nic_no" <?php
        if ($searchMode == "emp_nic_no") {
            echo "selected=selected";
        }
        ?> ><?php echo __("Employee Number") ?></option>
                            <option value="emp_display_name" <?php
        if ($searchMode == "emp_display_name") {
            echo "selected=selected";
        }
        ?> ><?php echo __("Employee Name") ?></option>
                            <option value="ln_ty_name" <?php
        if ($searchMode == "ln_ty_name") {
            echo "selected=selected";
        }
        ?> ><?php echo __("Loan Type Name") ?></option>
                            <option value="ln_app_date" <?php
        if ($searchMode == "ln_app_date") {
            echo "selected=selected";
        }
        ?> ><?php echo __("Apply Date") ?></option>
                            /option>
                            <option value="ln_app_effective_date" <?php
        if ($searchMode == "ln_app_effective_date") {
            echo "selected=selected";
        }
        ?> ><?php echo __("Effective Date") ?></option>
                        </select>
        
                        <label for="txtSearchValue"><?php echo __("Search For:") ?></label>
                        <input type="text" size="20" name="txtSearchValue" id="txtSearchValue" value="<?php echo $searchValue ?>" />
                        <input type="button" class="plainbtn" id="btnSearch"
                               value="<?php echo __("Search") ?>" />
                        <input type="reset" class="plainbtn" id="btnReset"
                               value="<?php echo __("Reset") ?>" />
                        <br class="clear"/>
                    </div>
                </form>-->
        <div class="actionbar">
            <div class="actionbuttons">
                <input type="button" class="plainbtn" id="btnAdd"
                       value="<?php echo __("Add") ?>" />
            </div>
            <div class="noresultsbar"></div>
            <div class="pagingbar">
                <?php
                if (is_object($pglay)) {
                    if ($pglay->getPager()->haveToPaginate() == 1) {
                        echo $pglay->display();
                    }
                }
                ?>
            </div>

            <br class="clear" />
        </div>
        <br class="clear" />
        <form name="standardView" id="standardView" method="post" action="<?php echo url_for('admin/deleteClass') ?>">
            <input type="hidden" name="mode" id="mode" value=""/>
            <table cellpadding="0" cellspacing="0" class="data-table">
                <thead>
                    <tr>
                        <td width="50">
                            <input type="checkbox" class="checkbox" name="chkAllCheck" value="" id="chkAllCheck" />
                        </td>
                        <td scope="col">

<?php echo $sorter->sortLink('e.emp_nic_no', __('Employee Number'), '@LoanSettlement', ESC_RAW); ?>
                        </td>
                        <td scope="col">

<?php echo $sorter->sortLink('e.emp_display_name', __('Employee Name'), '@LoanSettlement', ESC_RAW); ?>
                        </td>
                        <td scope="col">

<?php echo $sorter->sortLink('lt.ln_ty_name', __('Loan Type Name'), '@LoanSettlement', ESC_RAW); ?>
                        </td>
                        <td scope="col">

<?php echo $sorter->sortLink('ls.ln_st_mode', __('Settlement Mode'), '@LoanSettlement', ESC_RAW); ?>
                        </td>
                        <td scope="col">

                    <?php echo $sorter->sortLink('ls.ln_st_last_installment_number', __('Last Installment Number'), '@LoanSettlement', ESC_RAW); ?>
                        </td>
                    </tr>
                </thead>

                <tbody>
<?php
$row = 0;
foreach ($loanSettlementList as $loanSettlement) {
    $cssClass = ($row % 2) ? 'even' : 'odd';
    $row = $row + 1;
    ?>
                        <tr class="<?php echo $cssClass ?>">
                            <td>
                                <input type='checkbox' class='checkbox innercheckbox' name='chkLocID[]' id="chkLoc" value='<?php echo $appliedLoan->ln_app_number ?>' />
                            </td>
                            <td class="">
                                <?php
                                echo $loanSettlement->Employee->emp_nic_no;
                                ?>
                            </td>
                            <td class="">
                                <?php
                                if ($Culture == 'en') {
                                    echo $loanSettlement->Employee->emp_display_name;
                                } elseif ($Culture == 'si') {
                                    if (($loanSettlement->Employee->emp_display_name_si) == null) {
                                        echo $loanSettlement->Employee->emp_display_name;
                                    } else {
                                        echo $loanSettlement->Employee->emp_display_name_si;
                                    }
                                } elseif ($Culture == 'ta') {
                                    if (($loanSettlement->Employee->emp_display_name_ta) == null) {
                                        echo $loanSettlement->Employee->emp_display_name;
                                    } else {
                                        echo $loanSettlement->Employee->emp_display_name_ta;
                                    }
                                }
                                ?>
                            </td>
                            <td class="">
                                <?php
                               
                                if ($Culture == 'en') { 
                                    echo $loanSettlement->LoanType->ln_ty_name;
                                } elseif ($Culture == 'si') {
                                    if (($appliedLoan->LoanType->ln_ty_name_si) == null) {
                                        echo $loanSettlement->LoanType->ln_ty_name;
                                    } else {
                                        echo $loanSettlement->LoanType->ln_ty_name_si;
                                    }
                                } elseif ($Culture == 'ta') {
                                    if (($loanSettlement->LoanType->ln_ty_name_ta) == null) {
                                        echo $loanSettlement->LoanType->ln_ty_name;
                                    } else {
                                        echo $loanSettlement->LoanType->ln_ty_name_ta;
                                    }
                                }
                                ?>
                            </td>
                            <td class="">
                                <?php
                                if ($loanSettlement->ln_st_mode = 1)
                                    echo __('Full Settlement');

                                else {
                                    echo __('Part Settlement ');
                                }
                                ?>
                            </td>
                            <td class="">
    <?php
    echo $loanSettlement->ln_st_last_installment_number;
    ?>
                            </td>                           
                        </tr>
<?php } ?>
                </tbody>
            </table>
        </form>
    </div>
</div>
<script type="text/javascript">
    function validateform(){

        if($("#searchValue").val()=="")
        {

            alert("<?php echo __('Please enter search value') ?>");
            return false;

        }
        if($("#searchMode").val()=="all"){
            alert("<?php echo __('Please select the search mode') ?>");
            return false;
        }
        else{
            $("#frmSearchBox").submit();
        }

    }

    $(document).ready(function() {

        buttonSecurityCommon("btnAdd",null,null,"btnRemove");
        //When click add button
        $("#btnAdd").click(function() {
            location.href = "<?php echo url_for(public_path('../../symfony/web/index.php/loan/SaveLoanSettlement')) ?>";

        });

        // When Click Main Tick box
        $("#chkAllCheck").click(function() {
            if ($('#chkAllCheck').attr('checked')){
                $('.innercheckbox').attr('checked','checked');
            }else{
                $('.innercheckbox').removeAttr('checked');
            }
        });

        $(".innercheckbox").click(function() {
            if($(this).attr('checked'))
            {

            }else
            {
                $('#chkAllCheck').removeAttr('checked');
            }
        });

        //When click remove button
        $("#btnRemove").click(function() {
            $("#mode").attr('value', 'delete');
            if($('input[name=chkLocID[]]').is(':checked')){
                answer = confirm("<?php echo __("Do you really want to delete?") ?>");
            } else {
                alert("<?php echo __("Select at least one check box to delete") ?>");
            }

            if (answer !=0 ) {
                $("#standardView").submit();
            } else {
                return false;
            }
        });

        //When click Search Button
        $("#btnSearch").click(function() {
            $("#mode").attr('value', 'save');

            var searchMode = $('#cmbSearchMode');

            if (searchMode.val() == 'all')  {
                alert('<?php echo __("Please select a field to search") ?>');
                searchMode.focus();
                return false;
            } else if ($('#txtSearchValue').val() == '')  {
                alert('<?php echo __("Please enter search value") ?>');
                searchMode.focus();
                return false;    
            } else {
                $('#frmSearchBox').submit();
                return true;
            }
        });

        //When click Save Button
        $("#resetBtn").click(function() {
            location.href = "<?php echo url_for(public_path('../../symfony/web/index.php/loan/LoanSettlement')) ?>";
        });

    });

</script>

