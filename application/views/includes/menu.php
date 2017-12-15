                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="<?php echo $paper->name ? $paper->name :''; ?>" target='_BLANK'>White paper</a></li>
                        <li><a href="#terms">Terms</a></li>
                        
                        <li><a href="#skill">Token Info</a></li>
                        <li><a href="#contribute">Contribute</a></li>
                        <li><a href="#how-to">How To Contribute</a></li>
                        <?php if($this->session->userdata('is_logged_in')): ?>
                        
                        <!-- <li><a href="<?php //echo base_url('logout'); ?>">Logout</a></li> -->
                       <?php  else: ?>
                        <!-- <li><a href="<?php //echo base_url('login'); ?>">Login</a></li> -->
                        <!-- <li><a href="<?php //echo base_url('signup'); ?>">Signup</a></li> -->
                       <?php endif; ?>
                    </ul>