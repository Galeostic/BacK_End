<!DOCTYPE html>
<html>
    <title>Student Resume</title>
    <head><meta name=viewport content="width=device-width, initial-scale=1,user-scalable=no">
        <meta charset="utf8">
        <?php echo css_asset('bootstrap.min.css'); ?>
        <?php echo js_asset('jquery.min.js'); ?>
        <?php echo js_asset('bootstrap.min.js'); ?> 

    </head>

    <body>


        <br><br>
        <div class="container">
            <center>
                <h2>เลือกสาขาวิชาที่เรียน</h2>
            </center>

            <form method="post" action="<?php echo site_url('register_std/add_major'); ?>">

                <div class="form-group" >
                    <input type="text" name="std_id" value="<?php echo $id; ?>">

                    <select class="form-control" id="major_id" name="major_id"  >
                        <option>--เลือกสาขาวิชาที่เรียน--</option>
                        <!-- ทำการวนลูบจากการส่งข้อมูลมาของfac_cl จาตาราง faculty -->
                        <?php foreach ($rs->result() as $value) : ?>

                            <option value="<?php echo $value->major_id; ?> "><?php echo $value->major_name; ?></option>
                        <?php endforeach ?>  

                    </select>

                </div>
                <br>
                <div class="form-group">
                    <label for="std_g_id">รหัสกลุ่มเรียน:&#10024</label>

                    <input type="text" class="form-control" id="std_g_id" placeholder="รหัสกลุ่มเรียน" name="std_g_id">
                </div>
                <center>
                    <button type="submit" class="btn btn-success">&nbsp; ยืนยัน &nbsp;</button>
                </center>
            </form>

        </div>
        <br><br>


    </div>
</body>