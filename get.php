<button id="btn_tampil"> Tampilkan </button>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js" integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin = "anonymous">
</script>

<script>
    $(document).ready(function () {
        $("#btn_tampil").click(function () {
            $.get("info.php", function (data, status) {
                alert("Data : "+ data +"\nStatus : "+ status);
            });
        });
    });
</script>