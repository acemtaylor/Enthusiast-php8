<?php
include "header.php";
?>
Hello! I'm glad to see you here, on my fanlisting collective called <i>&quot;<?php echo htmlspecialchars(get_setting('collective_title'), ENT_QUOTES, 'UTF-8'); ?>&quot;</i>. Here you can find all my owned and joined fanlistings. Enjoy your stay =)<br><br>
<b>Collective statistics:</b>
<?php 
require_once ENTH_PATH . 'show_collective_stats.php'; 
?>
<table class="stats">
    <tr>
        <td class="right">Number of categories:</td>
        <td><?php echo $total_cats; ?></td>
    </tr>
    <tr>
        <td class="right">Number of joined listings:</td>
        <td><?php echo $joined_approved; ?> approved, <?php echo $joined_pending; ?> pending</td>
    </tr>
    <tr>
        <td class="right">Number of owned listings:</td>
        <td><?php echo $owned_current; ?> current, <?php echo $owned_upcoming; ?> upcoming, <?php echo $owned_pending; ?> pending</td>
    </tr>
    <tr>
        <td class="right">Number of collective affiliates:</td>
        <td><?php echo $affiliates_collective; ?> affiliates</td>
    </tr>
    <tr>
        <td class="right">Newest owned listing</td>
        <td>
            <?php if (!empty($owned_newest)) { ?>
                <a href="<?php echo htmlspecialchars($owned_newest['url'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
                    <?php echo htmlspecialchars($owned_newest['title'], ENT_QUOTES, 'UTF-8'); ?>: the <?php echo htmlspecialchars($owned_newest['subject'], ENT_QUOTES, 'UTF-8') . htmlspecialchars($owned_newest['listingtype'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
            <?php } else {
                echo 'None';
            } ?>
        </td>
    </tr>
    <tr>
        <td class="right">Newest joined listing</td>
        <td>
            <?php if (!empty($joined_newest)) { ?>
                <a href="<?php echo htmlspecialchars($joined_newest['url'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
                    <?php echo htmlspecialchars($joined_newest['subject'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
            <?php } else {
                echo 'None';
            } ?>
        </td>
    </tr>
    <tr>
        <td class="right">Total members in collective:</td>
        <td><?php echo $collective_total_fans_approved; ?> (<?php echo $collective_total_fans_pending; ?> pending)</td>
    </tr>
    <tr>
        <td class="right">Collective members growth rate:</td>
        <td><?php echo $collective_fans_growth_rate; ?> members/day</td>
    </tr>
    <tr>
        <td class="right">Average owned growth rate:</td>
        <td>
            <?php
            // Avoid division by zero
            $average_growth = $owned_current > 0 ? $collective_fans_growth_rate / $owned_current : 0;
            echo $average_growth;
            ?> members/day
        </td>
    </tr>
    <tr>
        <td class="right">Joined fanlistings growth rate:</td>
        <td><?php echo $joined_growth_rate; ?> listings/day</td>
    </tr>
</table>
<?php
include "footer.php";

