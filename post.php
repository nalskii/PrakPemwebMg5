<button id="btn_kirim"> Kirimkan </button>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js" integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin = "anonymous">
</script>
<script>
    $(document).ready(function () {
        $("#btn_kirim").click(function () {
            $.post("info-post.php",{
                nama : "Alexander The Great", nim : "118140037" },
                function (data, status) {
                    alert("Data : "+ data +"\nStatus : "+ status);
                }
            );
        });
    });
</script>