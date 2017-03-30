<?php
$subjects = array("Religion" , "Sinhala" , "English", "Mathematics" , "Science" , "History" ,"Category 1","Category 2","Category 3", "Library");
$periods = array(
        $subjects[0]=>2,
        $subjects[1]=>5,
        $subjects[2]=>5,
        $subjects[3]=>6,
        $subjects[4]=>6,
        $subjects[5]=>3,
        $subjects[6]=>3,
        $subjects[7]=>3,
        $subjects[8]=>3,
        $subjects[9]=>1,
);
?>
<div class="tab-pane" id="11">
    <form action="/" onsubmit="return add_subject();" id="form11">
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

    </form>

    <p>Assign 5 to x, and display the value of the comparison (x != 8).</p>
    <input type="number" name="num1" id="num1" placeholder="Number 1" onkeyup="myFunction()">
    <br>
    <br>
    <input type="number" name="num2" id="num2" placeholder="Number 2" onkeyup="myFunction()">


    <p id="demo"></p>

    <script>
        var x = 5;
        //    document.getElementById("demo").innerHTML = (x != 8);
        function myFunction() {
            var x, text;

            // Get the value of the input field with id="numb"
            var x = document.getElementById("num1").value;
            var y = document.getElementById("num2").value;
            var z = +x + +y;

            // If x is Not a Number or less than one or greater than 10
            if (isNaN(z) || (z) !=40) {
                text = "Periods per week should be 40";
            }
            else{
                text = "";
            }
            document.getElementById("demo").innerHTML = text;
        }
    </script>




</div>