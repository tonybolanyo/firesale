<input type="hidden" name="paypal_express[return_url]" value="<?php echo site_url($this->pyrocache->model('routes_m', 'build_url', array('cart'), $this->firesale->cache_time).'/success/paypal_express'); ?>" />
<button type="submit" class="btn" name="btnAction" value="paypal_express"><span>Pay with PayPal Express</span></button>
