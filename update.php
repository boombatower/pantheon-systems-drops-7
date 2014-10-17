<?php

/**
 * Executed on cron to auto trigger build when upstream changes are made.
 */

// For some reason github blocks file_get_contents() calls, perhaps http version?
$mirror = json_decode(`curl --silent https://api.github.com/repos/boombatower/pantheon-systems-drops-7/commits/7.x`, true);
$origin = json_decode(`curl --silent https://api.github.com/repos/pantheon-systems/drops-7/commits/master`, true);

$mirror = new DateTime($mirror['commit']['author']['date']);
$origin = new DateTime($origin['commit']['author']['date']);

if ($mirror < $origin) {
  echo "Triggering build...\n";
  passthru('git pull origin 7.x');
  passthru('date > date');
  passthru('git commit -am "Upstream changes, trigger build."');
  passthru('git push origin 7.x');
}
else {
  echo "No changes\n";
}
