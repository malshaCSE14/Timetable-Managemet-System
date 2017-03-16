<div class="tab-pane active" id="6">
    <form action="/" onsubmit="return add_subject();" id="form6">
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
                        <tr>
                            <th scope="row">1</th>
                            <td contenteditable='true'>Sinhala</td>
                            <td contenteditable='true'>6</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td contenteditable='true'>English</td>
                            <td contenteditable='true'>5</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td contenteditable='true'>Maths</td>
                            <td contenteditable='true'>6</td>

                        </tr>
                        </tbody>
                    </table>


                </div>


                <div class="form-group" >
                    <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-8" style="padding-bottom: 10px;">
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>

            </div>

        </div>

    </form>
</div>