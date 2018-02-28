<?php
$active =0;
require_once('header.php');
?>
<!-- Full Width Image Header -->

<style>
.faq p {
	margin-left: 15px;	
}
</style>
<!-- Page Content -->
<div style="margin-top:25px;" class="row">
	<div class="content" style="padding-left:30px; padding-right:30px;">
		<div class="card">
			<div class="content faq" style="padding-left:30px; padding-right:30px;">
				<center><h2 class="head">Frequently Asked Questions</h2></center>
				<hr>
				<h3>How does SteemAuto work?</h3>
				<p>Steemauto uses your account posting authority to post, upvote, and claim rewards for you automatically.</p>
				
				<h3>I've sent money, why can't I login?</h3>
				<p>Go to your wallet and make sure you sent exactly 0.001 SBD. Then try again.</p>
				
				<h3>What is posting authority?</h3>
				<p>In the Steem blockchain, each account have different keys that let you access different parts of the account. One of these keys is the 'posting key' which can be used to post, comment, upvote, follow, and etc. When using a posting key you can't access an account's balances, so your funds are perfectly safe.</p>
				
				<h3>Is SteemAuto secure?</h3>
				<p>SteemAuto is an open source app. You can view all of its source code at its <a href="https://github.com/mahdiyari/steemauto" target="_blank">GitHub repository</a>.</p>
				
				<h3>Why should I enter my password at steemconnect.com?</h3>
				<p>We are using steemconnect.com to broadcast the transaction which will allow @steemauto to use your account posting authority. To broadcasting this (and any) transaction you will need to input your password.
				Of course, you can remove this access any time by clicking on 'Unauthorize' button in your dashboard. </p>
				
				<h3>Do you have any access to my account balance?</h3>
				<p>No, SteemAuto can only publish a post, upvote, follow, resteem, and claim rewards. It can not access your account balance in any way.</p>
				
				<h3>Will SteemAuto use my account without my permission?</h3>
				<p>No, Steemauto will always operate by the settings which you configured in your account.</p>
				
				<h3>What is a Curation Trail?</h3>
				<p>By using the 'Curation Trail' section, you can automatically upvote the posts (not comments) which are upvoted by the selected user. 
				You can configure the 'upvote weight' for each user on the 'Curation Trail' page. 
				You can also sumbit a short description and become a "trail" which other users will be able to follow. 
				Note: For upvoting an user's authored posts, you should use Fanbase. Curation trails will not follow self upvotes.</p>
				
				<h3>What is a Fanbase?</h3>
				<p>By using the 'Fanbase' section, you can automatically upvote your favorite authors immediately after they publish any post (not comments). 
				You can configure the 'upvote weight' for each user on the 'Fanbase' page. </p>
				
				<h3>Will my upvotes be replaced if I manually upvoted a post?</h3>
				<p>No. In other tools if you upvote any post twice with different upvote weights, the first upvote is overriden by the second upvote. 
				In the Steemauto this problem is fixed. You can upvote any post manually before applying auto upvotes and the manual vote will not be overriden.</p>
				
				<h3>What is difference between 'Scale' and 'Fixed' in following trails?</h3>
				<p>Fixed voting weight means you will upvote with exact percentage you entered.<br>
				Scale voting weight means your voting weight will changed by trail voted weight. Let's say you followed a trail by this method with 10% then if trail upvotes any post by 50%, your upvote weight will be 5% (10% of 50%) </p>
				
				<h3>Any other questions?</h3>
				<p>Ask your questions on the <a href="/contact.php" target="_blank">Contact</a> page.</p>
				
				<h3>Useful articles:</h3>
				<p><a href="https://steemit.com/guide/@scrooger/steemauto-full-guide-and-how-to-register" target="_blank">STEEMAUTO - Full guide and how to REGISTER</a> by @scrooger</p>

			</div>
		</div>
	</div>
</div>

<?php
require('footer.php');
?>
