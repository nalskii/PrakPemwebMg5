<div id="tampil">
    Informasi yang di-request akan ditampilkan disini.
</div>

<button id="btn_tampil"> Tampilkan </button>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js" integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin = "anonymous"></script>
<script>
    $(document).ready(function () {
        $("#btn_tampil").click(function () {
            $("#tampil").load("demo.php");
        });
    });
</script>