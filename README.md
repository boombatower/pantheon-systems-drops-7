pantheon-systems-drops-7
========================
Squashed mirror of [pantheon-systems/drops-7](https://github.com/pantheon-systems/drops-7).

Uses [boombatower/git-squash-tags](https://github.com/boombatower/git-squash-tags) to squash all
the commits down to one per tag.

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
