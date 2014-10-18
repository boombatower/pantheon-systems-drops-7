pantheon-systems-drops-7
========================
Squashed mirror of [pantheon-systems/drops-7](https://github.com/pantheon-systems/drops-7) `master`
branch as `7.x` to be consistent with Drupal core.

Uses [boombatower/git-squash-tags](https://github.com/boombatower/git-squash-tags) to squash all
the commits down to one per tag. A squashed history is handy when deploying to a service like
Pantheon which uses a git repository for deployment as it relieves the need to store a bloated
history of Drupal core with no real benefit.

A cron job runs `update.php` every two hours to check for upstream tags and rebuild the squash
branch using travis.

[![Build Status](https://travis-ci.org/boombatower/pantheon-systems-drops-7.svg?branch=7.x)]
(https://travis-ci.org/boombatower/pantheon-systems-drops-7)

Caveat
------
Any commits after that last Drupal core release tag are ignored and will not be picked up until the
next Drupal core release. There is no clean workaround short of pantheon folks providing their own
release tags.

Usage
-----
Clone the `7.x-squash` branch.

```sh
$ git clone --branch 7.x-squash https://github.com/boombatower/pantheon-systems-drops-7.git
```
