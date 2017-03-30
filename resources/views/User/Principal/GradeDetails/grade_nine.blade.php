<?php
$subjects = array("Religion" , "Sinhala" , "English", "Mathematics" , "Science" , "History" ,"Geography",
        "Aesthetics", "Practical Technology" , "Health", "Tamil", "Citizens Education" , "Library");
$periods = array(
        $subjects[0]=>2,
        $subjects[1]=>5,
        $subjects[2]=>5,
        $subjects[3]=>5,
        $subjects[4]=>5,
        $subjects[5]=>2,
        $subjects[6]=>2,
        $subjects[7]=>3,
        $subjects[8]=>3,
        $subjects[9]=>2,
        $subjects[10]=>2,
        $subjects[11]=>2,
        $subjects[12]=>1
);
?>
<div class="tab-pane" id="9"> <form action="/" onsubmit="return add_subject();" id="form9">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">
                <div class="x_title">
                    <h2>Classes</h2>

                    <div class="clearfix"></div>
                </div>
                {{--number of classes--}}
                </br>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Number of classes</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <select required class="form-control">
                            <option value="">None</option>
                            <?php
                            for($class=0;$class<26;$class++){
                            ?>
                            <option value="<?php echo $class?>"><?php echo $class?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="clearfix"></div>
                </br>

                <div class="x_title">
                    <h2>Subjects</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-bordered" style="color: #000;" id="table6">
                        <thead>
                        <tr>
                            <th></th>
                            <th  width="60%">Subject</th>
                            <th  width="30%">Periods per week</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=0;
                        foreach ($subjects as $subject){

                        $i++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $subject ?></td>
                            <td contenteditable='true'><?php echo $periods[$subject] ?></td>

                        </tr>

                        <?php
                        }?>

                        <tr>
                            <th scope="row">14</th>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>

                        </tr>
                        </tbody>
                    </table>
                    <p id="demo"></p>


                </div>




                <div class="form-group" >
                    <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-8" style="padding-bottom: 10px;">
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button type="submit" class="btn btn-success" onclick="myFunction()">Save</button>
                    </div>
                </div>

            </div>

        </div>

    </form></div>