<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa icon-mailandsms"></i> <?= $this->lang->line('panel_title') ?></h3>
        <ol class="breadcrumb">
            <li><a href="<?= base_url("dashboard/index") ?>"><i class="fa fa-laptop"></i> <?= $this->lang->line('menu_dashboard') ?></a></li>
            <li><a href="<?= base_url("mailandsms/index") ?>"> <?= $this->lang->line('menu_mailandsms') ?></a></li>
            <li class="active"> <?= $this->lang->line('menu_add') ?> <?= $this->lang->line('menu_mailandsms') ?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="<?php if ($email == 1) echo 'active'; ?>"><a data-toggle="tab" href="#email" aria-expanded="true"><?= $this->lang->line('mailandsms_email') ?></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="email" class="tab-pane <?php if ($email == 1) echo 'active'; ?> ">
                            <br>
                            <div class="row">
                                <div class="col-sm-10">


                                    <form class="form-horizontal" role="form" method="post">
                                        <?php echo form_hidden('type', 'email'); ?>

                                        <?php
                                        if (form_error('email_usertypeID'))
                                            echo "<div class='form-group has-error' >";
                                        else
                                            echo "<div class='form-group' >";
                                        ?>
                                        <label for="email_usertypeID" class="col-sm-2 control-label">
                                            <?= $this->lang->line("mailandsms_usertype") ?> <span class="text-red">*</span>
                                        </label>
                                        <div class="col-sm-6">
                                            <?php
                                            $usertypeArray = array(
                                                'select' => $this->lang->line('mailandsms_all_role')
                                            );

                                            if (customCompute($usertypes)) {
                                                foreach ($usertypes as $key => $usertype) {
                                                    $usertypeArray[$usertype->usertypeID] = $usertype->usertype;
                                                }
                                            }

                                            echo form_dropdown("email_usertypeID", $usertypeArray, set_value("email_usertypeID"), "id='email_usertypeID' class='form-control select2'");
                                            ?>
                                        </div>
                                        <span class="col-sm-4 control-label">
                                            <?php echo form_error('email_usertypeID'); ?>
                                        </span>
                                </div>

                                <?php
                                if (form_error('email_schoolyear'))
                                    echo "<div id='divemail_schoolyear' class='form-group has-error' >";
                                else
                                    echo "<div id='divemail_schoolyear' class='form-group' >";
                                ?>
                                <label for="email_schoolyear" class="col-sm-2 control-label">
                                    <?= $this->lang->line("mailandsms_schoolyear") ?>
                                </label>
                                <div class="col-sm-6">
                                    <?php
                                    $schoolyearArray = array(
                                        'select' => $this->lang->line('mailandsms_all_schoolyear')
                                    );

                                    if (customCompute($schoolyears)) {
                                        $setschoolyear = '';
                                        foreach ($schoolyears as $key => $schoolyear) {
                                            if ($schoolyear->schoolyearID == $siteinfos->school_year) {
                                                $schoolyearArray[$schoolyear->schoolyearID] = $schoolyear->schoolyear . ' - (' . $this->lang->line('mailandsms_default') . ')';
                                                $setschoolyear = $schoolyear->schoolyearID;
                                            } else {
                                                $schoolyearArray[$schoolyear->schoolyearID] = $schoolyear->schoolyear;
                                            }
                                        }
                                    }

                                    echo form_dropdown("email_schoolyear", $schoolyearArray, set_value("email_schoolyear", $setschoolyear), "id='email_schoolyear' class='form-control select2'");
                                    ?>
                                </div>
                                <span class="col-sm-4 control-label">
                                    <?php echo form_error('email_schoolyear'); ?>
                                </span>
                            </div>

                            <?php
                            if (form_error('email_class'))
                                echo "<div id='divemail_class' class='form-group has-error' >";
                            else
                                echo "<div id='divemail_class' class='form-group' >";
                            ?>
                            <label for="email_class" class="col-sm-2 control-label">
                                <?= $this->lang->line("mailandsms_class") ?>
                            </label>
                            <div class="col-sm-6">
                                <?php
                                $classArray = array(
                                    'select' => $this->lang->line('mailandsms_all_class')
                                );

                                if (customCompute($allClasses)) {
                                    foreach ($allClasses as $allClass) {
                                        $classArray[$allClass->classesID] = $allClass->classes;
                                    }
                                }

                                echo form_dropdown("email_class", $classArray, set_value("email_class"), "id='email_class' class='form-control select2'");
                                ?>
                            </div>
                            <span class="col-sm-4 control-label">
                                <?php echo form_error('email_class'); ?>
                            </span>
                        </div>

                        <?php
                        if (form_error('email_section'))
                            echo "<div id='divemail_section' class='form-group has-error' >";
                        else
                            echo "<div id='divemail_section' class='form-group' >";
                        ?>
                        <label for="sectionID" class="col-sm-2 control-label">
                            <?= $this->lang->line("mailandsms_section") ?>
                        </label>
                        <div class="col-sm-6">
                            <?php
                            $arraysection['select'] = $this->lang->line("mailandsms_all_section");
                            if (customCompute($sections)) {
                                foreach ($sections as $section) {
                                    $arraysection[$section->sectionID] = $section->section;
                                }
                            }
                            echo form_dropdown("email_section", $arraysection, set_value("email_section"), "id='email_section' class='form-control select2'");
                            ?>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('email_section'); ?>
                        </span>
                    </div>

                    <?php
                    if (form_error('email_users'))
                        echo "<div class='form-group has-error' >";
                    else
                        echo "<div class='form-group' >";
                    ?>
                    <label for="email_users" class="col-sm-2 control-label">
                        <?= $this->lang->line("mailandsms_users") ?>
                    </label>
                    <div class="col-sm-6">
                        <?php
                        $userArray = array(
                            'select' => $this->lang->line('mailandsms_all_users')
                        );

                        if (customCompute($allStudents)) {
                            foreach ($allStudents as $allStudent) {
                                $userArray[$allStudent->studentID] = $allStudent->name;
                            }
                        }

                        echo form_dropdown("email_users", $userArray, set_value("email_users"), "id='email_users' class='form-control select2'");
                        ?>
                    </div>
                    <span class="col-sm-4 control-label">
                        <?php echo form_error('email_users'); ?>
                    </span>
                </div>


                <?php
                if (form_error('email_template'))
                    echo "<div class='form-group has-error' >";
                else
                    echo "<div class='form-group' >";
                ?>
                <label for="email_template" class="col-sm-2 control-label">
                    <?= $this->lang->line("mailandsms_template") ?>
                </label>
                <div class="col-sm-6">

                    <?php
                    $array = array(
                        'select' => $this->lang->line('mailandsms_select_tem'),
                    );

                    echo form_dropdown("email_template", $array, set_value("email_template"), "id='email_template' class='form-control select2'");
                    ?>
                </div>
                <span class="col-sm-4 control-label">
                    <?php echo form_error('email_template'); ?>
                </span>
            </div>

        

        <?php
        if (form_error('email_type'))
            echo "<div class='form-group has-error' >";
        else
            echo "<div class='form-group' >";
        ?>
        <label for="email_type" class="col-sm-2 control-label">
            <?= $this->lang->line("mailandsms_type") ?> <span class="text-red">*</span>
        </label>
        <div class="col-sm-6">
        <input type="text" class="form-control" id="email_type" name="email_type" value="<?= set_value('email_type') ?>">
        </div>
        <span class="col-sm-4 control-label">
            <?php echo form_error('email_type'); ?>
        </span>
    </div>

    <?php
    if (form_error('email_subject'))
        echo "<div class='form-group has-error' id='subject_section' >";
    else
        echo "<div class='form-group' id='subject_section' >";
    ?>
    <label for="email_subject" class="col-sm-2 control-label">
        <?= $this->lang->line("mailandsms_subject") ?> <span class="text-red">*</span>
    </label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="email_subject" name="email_subject" value="<?= set_value('email_subject') ?>">
    </div>
    <span class="col-sm-4 control-label">
        <?php echo form_error('email_subject'); ?>
    </span>
</div>

<?php
if (form_error('email_message'))
    echo "<div class='form-group has-error' >";
else
    echo "<div class='form-group' >";
?>
<label for="email_message" class="col-sm-2 control-label">
    <?= $this->lang->line("mailandsms_message") ?> <span class="text-red">*</span>
</label>
<div class="col-sm-10">
    <textarea class="form-control" id="email_message" name="email_message"><?= set_value('email_message') ?></textarea>
</div>
<span class="col-xs-12 col-sm-10 col-sm-offset-2 control-label">
    <?php echo form_error('email_message'); ?>
</span>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        <input type="submit" class="btn btn-success" value="<?= $this->lang->line("send") ?>">
    </div>
</div>

</form>

</div>
</div>
</div>



</form>
</div>
</div>
</div>
</div>
</div> <!-- nav-tabs-custom -->

<?php if ($siteinfos->note == 1) { ?>
    <div class="callout callout-danger">
        <p><b>Note:</b> Admin can make custom template before send email or sms, that will help you send email/sms very quickly.</p>
    </div>
<?php } ?>

</div>
</div>
</div>

</div><!-- /.box -->
<script type="text/javascript" src="<?php echo base_url('assets/editor/jquery-te-1.4.0.min.js'); ?>"></script>

<?php
$useroption = '<option value="select">' . $this->lang->line('mailandsms_all_users') . '</option>';
$classoption = '<option value="select">' . $this->lang->line('mailandsms_all_class') . '</option>';
$schoolyearoption = '<option value="select">' . $this->lang->line('mailandsms_all_schoolyear') . '</option>';

$setEmailUserTypeID = $email_usertypeID;
$setSMSUserTypeID = $sms_usertypeID;

$setEmailUserID = $emailUserID;
$setEmailTemplateID = $emailTemplateID;

$setSMSUserID = $smsUserID;
$setSMSTemplateID = $smsTemplateID;

?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
        $('#divemail_class').hide();
        $('#divemail_section').hide();
        $('#divemail_schoolyear').hide();
        $('#email_message').jqte();
        $('#otheremail_message').jqte();


        var usertypeID = "<?= $setEmailUserTypeID ?>";
        var userID = "<?= $setEmailUserID ?>";
        var emailTemplateID = "<?= $setEmailTemplateID ?>";

        var nonEmailUsertypeID = usertypeID;
        var euser = userID;
        if (usertypeID != 'select') {
            $.ajax({
                type: 'POST',
                url: "<?= base_url('mailandsms/alltemplate') ?>",
                data: "usertypeID=" + usertypeID + "&type=" + "email",
                dataType: "html",
                success: function(data) {
                    $('#email_template').html(data);
                    $('#email_template').val(emailTemplateID).trigger('change');
                }
            });

            $.ajax({
                type: 'POST',
                url: "<?= base_url('mailandsms/allusers') ?>",
                data: {
                    'usertypeID': usertypeID,
                    'userID': userID
                },
                dataType: "html",
                success: function(data) {
                    if (usertypeID == 3) {
                        $('#divemail_class').show();
                        $('#divemail_section').show();

                        $('#divemail_schoolyear').show();

                        $('#email_users').val(euser).trigger('change');
                    } else if (nonEmailUsertypeID == 3) {
                        $('#divemail_class').show();
                        $('#divemail_section').show();

                        $('#divemail_schoolyear').show();

                        $('#email_users').val(euser).trigger('change');
                    } else {
                        $('#divemail_schoolyear').hide();
                        $('#divemail_class').hide();
                        $('#divemail_section').hide();
                        $('#email_users').html(data);
                        $('#email_users').val(euser).trigger('change');
                    }
                }
            });

        } else {
            $('#email_users').html('<?= $useroption ?>');
        }

        $("#email_usertypeID").change(function() {
            var usertypeID = $(this).val();
            var userID = "<?= $setEmailUserID ?>";
            if (usertypeID != 'select') {
                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/alltemplate') ?>",
                    data: "usertypeID=" + usertypeID + "&type=" + "email",
                    dataType: "html",
                    success: function(data) {
                        $('#email_template').html(data);
                        $('#email_template').val('select').trigger('change');
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allusers') ?>",
                    data: {
                        "usertypeID": usertypeID,
                        'userID': userID
                    },
                    dataType: "html",
                    success: function(data) {
                        if (usertypeID == 3) {
                            $('#divemail_class').show();
                            $('#divemail_section').show();
                            $('#email_class').html(data);

                            $('#divemail_schoolyear').show();

                            $('#email_users').html('<?= $useroption ?>');
                            $('#email_users').val('select').trigger('change');
                        } else {
                            $('#divemail_schoolyear').hide();
                            $('#divemail_class').hide();
                            $('#divemail_section').hide();
                            $('#email_users').html(data);
                            $('#email_users').val('select').trigger('change');
                        }
                    }
                });
            } else {
                $('#email_users').html('<?= $useroption ?>');
            }
        });

        $('#email_schoolyear').change(function() {
            var schoolyear = $(this).val();
            if (schoolyear != 'select') {
                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allusers') ?>",
                    data: "usertypeID=" + 3,
                    dataType: "html",
                    success: function(data) {
                        $('#email_class').html(data);
                    }
                });
            } else {
                $('#email_class').html('<?= $classoption ?>');
                $('#email_users').html('<?= $useroption ?>');
            }
        });

        $('#email_class').change(function() {
            var schoolyear = $('#email_schoolyear').val();
            var classes = $(this).val();
            if (classes != 'select') {

                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allsection') ?>",
                    data: "classes=" + classes,
                    dataType: "html",
                    success: function(data) {
                        $('#email_section').html(data)
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allstudent') ?>",
                    data: "schoolyear=" + schoolyear + "&classes=" + classes + "&section=",
                    dataType: "html",
                    success: function(data) {
                        $('#email_users').html(data);
                    }
                });
            } else {
                $('#email_users').html('<?= $useroption ?>');
            }
        });

        $('#email_section').change(function() {
            var schoolyear = $('#email_schoolyear').val();
            var section = $(this).val();
            var classes = $('#email_class').val();
            if (section != 'select') {

                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allstudent') ?>",
                    data: "schoolyear=" + schoolyear + "&classes=" + classes + "&section=" + section,
                    dataType: "html",
                    success: function(data) {
                        console.log(data);
                        $('#email_users').html(data);
                    }
                });
            } else {
                $('#email_users').html('<?= $useroption ?>');
            }
        });



        $('#email_template').change(function() {
            var templateID = $(this).val();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('mailandsms/alltemplatedesign') ?>",
                data: "templateID=" + templateID,
                dataType: "html",
                success: function(data) {
                    $('.jqte_editor').html(data);
                }
            });

        });


        /* Start For Sms */

        $('#divsms_class').hide();
        $('#divsms_section').hide();
        $('#divsms_schoolyear').hide();

        var usertypeID = "<?= $setSMSUserTypeID ?>";
        var userID = "<?= $setSMSUserID ?>";
        var smsTemplateID = "<?= $setSMSTemplateID ?>";
        var nonSMSUsertypeID = usertypeID;

        if (usertypeID != 'select') {
            $.ajax({
                type: 'POST',
                url: "<?= base_url('mailandsms/alltemplate') ?>",
                data: "usertypeID=" + usertypeID + "&type=" + "sms",
                dataType: "html",
                success: function(data) {
                    $('#sms_template').html(data);
                    $('#sms_template').val(smsTemplateID).trigger('change');
                }
            });

            $.ajax({
                type: 'POST',
                url: "<?= base_url('mailandsms/allusers') ?>",
                data: {
                    'usertypeID': usertypeID,
                    'userID': userID
                },
                dataType: "html",
                success: function(data) {
                    if (usertypeID == 3) {
                        $('#divsms_class').show();
                        $('#divsms_section').show();

                        $('#divsms_schoolyear').show();

                        $('#sms_users').val(userID).trigger('change');
                    } else if (nonSMSUsertypeID == 3) {
                        $('#divsms_class').show();
                        $('#divsms_section').show();

                        $('#divsms_schoolyear').show();

                        $('#sms_users').val(userID).trigger('change');
                    } else {
                        $('#divsms_schoolyear').hide();
                        $('#divsms_class').hide();
                        $('#divsms_section').hide();
                        $('#sms_users').html(data);
                        $('#sms_users').val(userID).trigger('change');
                    }
                }
            });
        } else {
            $('#sms_users').html('<?= $useroption ?>');
        }

        $("#sms_usertypeID").change(function() {
            var usertypeID = $(this).val();
            var userID = "<?= $setSMSUserID ?>";
            if (usertypeID != 'select') {
                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/alltemplate') ?>",
                    data: "usertypeID=" + usertypeID + "&type=" + "sms",
                    dataType: "html",
                    success: function(data) {
                        $('#sms_template').html(data);
                        $('#sms_template').val('select').trigger('change');
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allusers') ?>",
                    data: {
                        'usertypeID': usertypeID,
                        'userID': userID
                    },
                    dataType: "html",
                    success: function(data) {
                        if (usertypeID == 3) {
                            $('#divsms_class').show();
                            $('#divsms_section').show();
                            $('#sms_class').html(data);

                            $('#divsms_schoolyear').show();

                            $('#sms_users').html('<?= $useroption ?>');
                            $('#sms_users').val('select').trigger('change');
                        } else {
                            $('#divsms_schoolyear').hide();
                            $('#divsms_class').hide();
                            $('#divsms_section').hide();
                            $('#sms_users').html(data);
                            $('#sms_users').val('select').trigger('change');
                        }
                    }
                });
            } else {
                $('#sms_users').html('<?= $useroption ?>');
            }
        });

        $('#sms_schoolyear').change(function() {
            var schoolyear = $(this).val();
            if (schoolyear != 'select') {
                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allusers') ?>",
                    data: "usertypeID=" + 3,
                    dataType: "html",
                    success: function(data) {
                        $('#sms_class').html(data);
                    }
                });
            } else {
                $('#sms_class').html('<?= $classoption ?>');
                $('#sms_users').html('<?= $useroption ?>');
            }
        });

        $('#sms_class').change(function() {
            var schoolyear = $('#sms_schoolyear').val();
            var classes = $(this).val();
            if (classes != 'select') {

                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allsection') ?>",
                    data: "classes=" + classes,
                    dataType: "html",
                    success: function(data) {
                        $('#sms_section').html(data)
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allstudent') ?>",
                    data: "schoolyear=" + schoolyear + "&classes=" + classes + "&section=",
                    dataType: "html",
                    success: function(data) {
                        $('#sms_users').html(data);
                    }
                });
            } else {
                $('#sms_users').html('<?= $useroption ?>');
            }
        });

        $('#sms_section').change(function() {
            var schoolyear = $('#sms_schoolyear').val();
            var section = $(this).val();
            var classes = $('#sms_class').val();
            if (section != 'select') {

                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('mailandsms/allstudent') ?>",
                    data: "schoolyear=" + schoolyear + "&classes=" + classes + "&section=" + section,
                    dataType: "html",
                    success: function(data) {
                        console.log(data);
                        $('#sms_users').html(data);
                    }
                });
            } else {
                $('#sms_users').html('<?= $useroption ?>');
            }
        });

        $('#sms_template').change(function() {
            var templateID = $(this).val();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('mailandsms/alltemplatedesign') ?>",
                data: "templateID=" + templateID,
                dataType: "html",
                success: function(data) {
                    $('#sms_message').html(data);
                }
            });

        });
    });
</script>