Ansible Project
===============

This repo describes my server configurations put into source control with [Ansible 1.4.1](http://www.ansible.com/home) for automation.

All boxes are running on Ubuntu 12.04 LTS hosted by CloudAtCost.

### Secrets

This repository includes some 'secret' information using [git-crypt](https://www.agwa.name/projects/git-crypt/).

Alternatively, git-crypt can be installed via [homebrew](http://brew.sh):

```bash
brew install git-crypt
```

**Cloning a repository with encrypted files:**

```bash
git clone /path/to/repo
cd repo
git-crypt init /path/to/keyfile
```

That's all you need to do - after running git-crypt init, you can use git normally - encryption and decryption happen transparently.

A random keyfile was originally generated like this:

`git-crypt keygen ~/.ssh/git-crypt-ansible`