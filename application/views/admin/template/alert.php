<script type="text/javascript">
    <?php if ($this->session->flashdata('success')) { ?>
        iziToast.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php } else if ($this->session->flashdata('error')) {  ?>
        iziToast.error({
            title: "Gagal",
            message: "<?php echo $this->session->flashdata('error'); ?>",
            position: "topRight",
        });
    <?php } ?>
</script>