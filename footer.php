</div>
<!-- 内容主体闭合  -->
<?php wp_footer(); ?>
<?php  ?>

<script>

    console.log("SQL 请求数：<?php echo get_num_queries();?>");
    console.log("页面生成耗时： <?php echo timer_stop(0,5);?>");
</script>


</body>
</html>