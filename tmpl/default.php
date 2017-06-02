<?php
/**
 * @package    module
 *
 * @author     pawel <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');
?>

<?php /*if($params['widget_license'] !== -1):*/ ?><!--
<script type="text/javascript">
    (function () {
        var ufc = document.createElement('script');
        ufc.type = 'text/javascript';
        ufc.async = true;
        ufc.src = 'https://node.unifiedfactory.com/<?php /*echo $params['widget_license'];*/ ?>';
        document.getElementsByTagName("head")[0].appendChild(ufc);
    })();
</script>
--><?php /*endif; */ ?>

<script type="text/javascript">
	<?php echo $params['widget_script'];?>
</script>
