<div class="col-md-6">
	<?php if (!empty($logo)): ?>
		<img src="<?php echo image_module('config/logo',$logo['image']) ?>" class="img img-fluid">
	<?php endif ?>
</div>
<div class="col-md-6">
	<div class="row">
		<div class="col-md-12">
			<div class="support float-right">
				<span class="primary">Live Support</span>: 
				<a href="https://wa.me/<?php echo @intval($meta['contact']['wa']) ?>" class="badge badge-light">Sales 1<img src="<?php echo $link_template;?>/assets/images/wa.png" alt="" width="40"></a>
				<a href="https://wa.net/<?php echo str_replace('+', '', @intval($meta['contact']['phone']))?>" class="badge badge-light">Sales 2<img src="<?php echo $link_template;?>/assets/images/wa.png" alt="" width="40"></a>
			</div>
		</div>
		<div class="col-md-12">
			<hr>
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Temukan Sesuatu" aria-label="Temukan Sesuatu" aria-describedby="button-addon2">
			  <div class="input-group-append">
			    <button class="btn btn-warning" type="button" id="button-addon2"><i class="fa fa-search"></i>Cari</button>
			  </div>
			</div>
		</div>
	</div>
</div>