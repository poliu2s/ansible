Ansible Project
===============

This repo describes my server configurations put into source control with [Ansible 1.4.1](http://www.ansible.com/home) for automation.

All boxes are running on Ubuntu 12.04 LTS hosted by CloudAtCost (100 Mbit Network).

### Server info

* Rukia: 1 Xeon vCPU, 512MB ECC RAM, 10GB SSD
* Hinata: 1 Xeon vCPU, 512MB ECC RAM, 10GB SSD
* Mikasa: 4 Xeon vCPU, 2GB ECC RAM, 40GB SSD
* Winry: 2 Xeon vCPU, 1GB ECC RAM, 20GB SSD
* Yoruichi: 2 Xeon vCPU, 1GB ECC RAM, 20GB SSD

### Initial setup

Use the tag "isFirstRun" when spinning up a box for the first time on the cloud:

```bash
ansible-playbook -i inventories/production cac-rukia.yml --extra-vars "isFirstRun=True"
```

Vagrant boxes were developed on Oracle VirtualBox 4.3.6. The Vagrantfile is broken into multi-machines for testing each setup. Boxes can be spun up with:

```
vagrant up <project-name>
```


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

```
git-crypt keygen ~/.ssh/git-crypt-ansible
```

### Tips

Consider syncing your VirtualBox guest additions using a very nice plugin called [Vbguest](https://github.com/dotless-de/vagrant-vbguest). To install, you type this one time in the directory that also keeps your `Vagrantfile`:

```
vagrant plugin install vagrant-vbguest
```