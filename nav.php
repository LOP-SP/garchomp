<?php
	if (get_next_posts_link())
	{
		echo "<span class='nav left'>";
		next_posts_link("+antigas");
		echo "</span>";
	}
	if (get_previous_posts_link())
	{
		echo "<span class='nav right'>";
		previous_posts_link("+recentes");
		echo "</span>";
	}
	echo "<div class='clear'></div>";
?>