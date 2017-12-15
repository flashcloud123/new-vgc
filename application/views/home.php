
     
 
    <!--About-area-->
    <section class="gray-bg relative fix" id="terms">
        <div class="space-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 ">
                <div class="my-div">
                    
                    <div class="space-30"></div>
                    <h2><?php echo $terms->heading ? $terms->heading :''; ?></h2>
                    <div class="space-40"></div>
                  
                   <!--  <p><b>1.</b>VibGyor is the next decentralized worldwide cryptocurrency, based on the Ethereum structure.</p>
                      <p><b>2.</b>The ICO is conducted with VibGyor Coin smart contract issuing ERC20 Tokens. The tokens are issued instantly upon reception of an Ethereum coin payment, however token transactions remain locked until ICO ends.</p>
                      <p><b>3.</b>To invest in the ICO, you simply need to send funds to the following ICO contract : 0xdA301d4311283479eBe68036b689adcEBF481744
. The minimum accepted amount is 0.01 ETH.</p>
                      <p><b>4.</b>DO NOT send funds from an exchange or any address you don't have full control over. Tokens will be issued to the sending address. There will be no possibility to retrieve your Tokens if they are lost.</p>
                     -->
                    <?php echo $terms->content ? $terms->content :''; ?>
                    
              
            </div>
            </div>
        </div>
           </section>




    <!--About-area/-->
    <!--Work-area-->
   
    <!--Work-area/-->
    
    <section class="gray-bg relative fix" id="skill">
        <div class="space-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12" >
                    <div class="my-div">
                    <div class="space-30"></div>
                    <h1 style="text-align: center;"> <?php echo $token_info->heading ? $token_info->heading :''; ?>
                   </h1>
                    <div class="space-40"></div>
                  <!--   <p><b>1.</b>The ERC20 Token contract is the following : 0xdA301d4311283479eBe68036b689adcEBF481744
. That's the one you will need to interact with and check your balance in your ether wallet.</p>

                    <p><b>2.</b>If the Token creation cap is met, the ICO will end and no new tokens will be issued.</p>
                    <p><b>3.</b>The funding goal required for the project to start is 1 USD. If this amount of $1 isn't met at the end of the ICO, every investor will be refunded.</p>
                      
                      <p><b>4.</b>To invest in the ICO, you simply need to send funds to the following ICO contract : 0xdA301d4311283479eBe68036b689adcEBF481744
. The minimum accepted amount is 0.01 ETH.</p>
                  -->   
                 <?php echo $token_info->content ? $token_info->content :''; ?>   
                    
              
            </div>
            </div>
        </div>
      
    </section>


     <section class="gray-bg relative fix" id="contribute">
        <div class="space-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12"  >
                    
                    <div class="space-30"></div>
                    <h1 style="text-align: center;"><?php echo $contribute->heading ? $contribute->heading :''; ?></h1>
                    <div class="my-div text-center">
                    <div class="space-40"></div>
                    <p class="text-center">This is the contract address you should send ETH to:</p>

                   
                <div class="contract-address ">
                <input type="text" readonly value="0xdA301d4311283479eBe68036b689adcEBF481744" id="contractAddress" ><button><i class="active ">copy</i> </button>



            </div>



            <div class="wwam-converter clearfix">
                <div>
                    <input name="eth" id="eth" value="1" type="number"  ><label for="eth" class="active">ETH</label></div>
                <div>
                    <input name="wwam" id="vgc" value="" type="number" ><label for="wwam" class="active">VGC</label>
                </div>
            </div>
        </div>

        <div>
            

            <div class="text-center"> 

<?php echo $contribute->content ? $contribute->content :''; ?>
</div>
        </div>
        </div>
      
    </section>


    
<section class="gray-bg relative fix" id="how-to">
        <div class="space-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    
                    <div class="space-30"></div>
                    <h1 style="text-align: center; "><?php echo $how_to_mew->heading ? $how_to_mew->heading :''; ?></h1>
                    <div class="space-40"></div>



                    <div class="my-div"><!-- 
            <p style="font-size: 18px;" ><b>Using MyEtherWallet</b></p>

                    <p><b>1.</b>Click on Send Ether & Tokens.</p>
                    <p><b>2.</b>Access your wallet and log in.</p>
                      <p><b>3.</b>In the "To Address" field, fill in the ICO contract address: 0xdA301d4311283479eBe68036b689adcEBF481744.
</p>
                      <p><b>4.</b>We strongly advice to use at least 300,000 as gas limit to make sure your transaction will be processed by the contract.</p>


                      <p><b>5.</b>You can usually lower gas price to 7-8 Gwei and still get your transaction processed in a short time.</p>

                      <p><b>6.</b>Press Generate Transaction followed with Send Transaction.</p>
                      <p><b>7.</b>Once the transaction is mined you will automatically receive your VGC tokens.</p>

                      <p><b>8.</b>Press "Add Custom Token" under "Token Balances" in the right column.</p>
                      <p><b>9.</b>In the "Address" field, fill in the token contract address: 0xdA301d4311283479eBe68036b689adcEBF481744.
</p>
                      <p> <b>10.</b>In the "Token Symbol" field, fill in VGC.</p>

                       <p><b>11.</b>In the "Decimals" field, fill in 18.</p>
                       <p><b>12.</b>Press Save. You should now be able to see your token balance.</p>
                     -->

                     <?php echo $how_to_mew->content ? $how_to_mew->content :''; ?>
                    
                    </div>
              
            </div>
        </div>
      
    </section>


    <section class="gray-bg relative fix" id="how-to-2">
        <div class="space-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    
                  
                 <div class="my-div">  
                 
            <p style="font-size: 18px;" ><b><?php echo $how_to_meta->heading ? $how_to_meta->heading :''; ?></b></p>

                   <!--  <p><b>1.</b>Make sure you've imported your account</p>
                    <p><b>2.</b>Press Send.</p>
                      <p><b>3.</b>In the "Recipient Address" field, fill in the ICO contract address: 0xdA301d4311283479eBe68036b689adcEBF481744</p>
                      <p><b>4.</b>In the "Amount" field, fill in the amount you wish to send. Minimum accepted is 0.01 ETH.</p>


                      <p><b>5.</b>Press Next.</p>

                      <p><b>6.</b>We strongly advice to use at least 300,000 as gas limit to make sure your transaction will be processed by the contract. Unused gas will be returned to you.</p>
                      <p><b>7.</b>You can usually lower gas price to 7-8 Gwei and still get your transaction processed in a short time.</p>

                      <p><b>8.</b>Press Submit</p>
                      <p><b>9.</b>Once the transaction is mined you will automatically receive your  VGC tokens.</p>
                      <p> <b>10.</b>Head to the "Tokens" tab and press the "+" at the bottom of the window.</p>

                       <p><b>11.</b>In the "Token Address" field, fill in the token contract address: 0xdA301d4311283479eBe68036b689adcEBF481744.
</p>
                       <p><b>12.</b>In the "Token Symbol" field, fill in VGC</p>   <p><b>13.</b>In the "Decimals of Precision" field, fill in 18.</p>  
                        <p><b>14.</b>Press Add. You should now be able to see your token balance.</p>
                     -->
                     <?php echo $how_to_meta->content ? $how_to_meta->content :''; ?>
                    </div>
                    
              
            </div>
        </div>
      
    </section>


     <section class="gray-bg relative fix" id="about">
        <div class="space-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    
                  
                   <div class="my-div">
                 
            <p style="font-size: 18px;" ><?php echo $note->heading ? $note->heading :''; ?></p>

                   <!--  <p><b>1.</b>You can invest in the ICO using any Ethereum wallet. Follow the instructions listed above.</p>
                    --> 
                   <?php echo $note->content ? $note->content :''; ?> 
              </div>      
                    
              
            </div>
        </div>
      
    </section>





    