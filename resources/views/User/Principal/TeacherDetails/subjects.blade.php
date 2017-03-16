<script id="jsSource" type="text/javascript">
    $(function () {
        // Initialize appendGrid
        $('#tblAppendGrid').appendGrid({
            caption: 'Subjects',
            initRows: 1,
            columns: [
                { name: 'Subject', display: 'Subject', type: 'text', ctrlAttr: { maxlength: 100 }, ctrlCss: { width: '200px'} },
                { name: 'Periods Per Week', display: 'Periods Per Week', type: 'text', ctrlAttr: { maxlength: 100 }, ctrlCss: { width: '120px'} },
    //
</script>
<form action="" method="post">
    <table id="tblAppendGrid">
    </table>
    <br />

</form>