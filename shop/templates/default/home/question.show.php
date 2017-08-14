<?php defined('InShopNC') or exit('Access Invalid!');?>

<link href="<?php echo SHOP_TEMPLATES_URL;?>/dw/css/answerList.css" rel="stylesheet" type="text/css">
<!-- 问答显示页start -->
<<style>
body{background: #F8F8F8;}
</style>
<div class="answerBox">
	<div class="answerSmallBox">
		
		<!--问题列表开始-->
		<div class="healthBox_qty">
			<div class="healthImgBox_qty">
				<img src="<?php echo SHOP_TEMPLATES_URL;?>/dw/image/store_qty.png"/>
			</div>
			<div class="healthRightBox_qty">
				<div class="healthTopFont_qty">
					热点<span>提问</span>
				</div>
				<div class="healthBottomFont_qty">
					HOT<span>QUESTIONS</span>
				</div>
			</div>
		</div>
		
		<!--问题结束-->
		<!--问题列表开始-->
		<div class="answerListBox_qty">
			<ul class="answerSmalllistBox_qty">
			   
				<li>
				    
					<div class="answerLeft_qty">
					    
						<div class="answer_qty">
							<a href="<?php echo urlShop("question","question_show",array("qid"=>$question['question_id']))?>"><h4>Q：<?php echo str_cut($question['question_title'], 34)?><span><?php echo date("Y.m.d",$question['question_time'])?></span></h4></a>
						</div>
						<div class="answer_qty">
							<h4 class="color_qty">A：</h4><p>遗传性多发性骨软骨瘤也称为多发性外生骨疣、骨干端连续症、遗传性畸形性软骨发育异常症。典型发病部位是股骨、胫骨、腓骨的远近侧端及肱骨近侧端。临床表现为可触及的骨性肿块。本病无症状时无须处理，出现症状时，采取相应的治疗措施。</p>
						</div>
						<div class="answer_qty">
							<p class="left_qty">遗传性多发性骨软骨瘤也称为多发性外生骨疣、骨干端连续症、遗传性畸形性软骨发育异常症。典型发病部位是股骨、胫骨</p>
						</div>
						<div class="answer_qty">
							<p class="left_qty">遗传性多发性骨软骨瘤也称为多发性外生骨疣、骨干端连续症、遗传性畸形性软骨发育异常症</p>
						</div>
						<div class="anony_qty">
							<span class="anonyBox_qty"><?php if($question['member_truename']){echo $question['member_truename'];}else{echo $question['member_name'];}?>的提问</span>
							<span class="anonyR_qty">张医师的回答</span>
						</div>
					</div>
					<div class="answerRight_qty">
						<a href="">
							<img src="<?php echo SHOP_TEMPLATES_URL;?>/dw/image/doctor_qty.png"/>
							<span class="doctor_qty">张医师&nbsp;&nbsp;<span>预约+</span></span>
						</a>
					</div>
					
				</li>
				
			</ul>
		</div>
		<!--问题列表结束-->
		<!--分页开始-->
		<div class="pageBox_qty">
				
		</div>
		<!--分页结束-->
	</div>
</div>





<!-- 问答显示页end -->