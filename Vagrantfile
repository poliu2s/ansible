Vagrant.configure("2") do |config|
  config.ssh.forward_agent = true

  config.vm.define "docker" do |docker|
      docker.vm.box = "precise64"
      docker.vm.network :private_network, ip: "192.168.2.84"

      docker.vm.provision "ansible" do |ansible|
        ansible.playbook = "vagrant-docker.yml"
        ansible.inventory_path = "./inventories/vagrant"
      end
  end

  config.vm.define "hinata" do |hinata|
      hinata.vm.box = "precise64"
      hinata.vm.network :private_network, ip: "192.168.2.82"
      hinata.vbguest.auto_update = false

      hinata.vm.provision "ansible" do |ansible|
        ansible.playbook = "vagrant-hinata.yml"
        ansible.inventory_path = "./inventories/vagrant"
      end
  end

  config.vm.define "rukia" do |rukia|
      rukia.vm.box = "precise64"
      rukia.vm.network :private_network, ip: "192.168.2.81"

      rukia.vm.provision "ansible" do |ansible|
        ansible.playbook = "vagrant-rukia.yml"
        ansible.inventory_path = "./inventories/vagrant"
      end
  end

  config.vm.define "mikasa" do |mikasa|
      mikasa.vm.box = "precise64"
      mikasa.vm.network :private_network, ip: "192.168.2.80"

      mikasa.vm.provision "ansible" do |ansible|
        ansible.playbook = "vagrant-mikasa.yml"
        ansible.inventory_path = "./inventories/vagrant"
      end
  end

  config.vm.define "winry" do |winry|
      winry.vm.box = "precise64"
      winry.vm.network :private_network, ip: "192.168.2.79"

      winry.vm.provision "ansible" do |ansible|
        ansible.playbook = "vagrant-winry.yml"
        ansible.inventory_path = "./inventories/vagrant"
      end
  end

  config.vm.define "yoruichi" do |yoruichi|
      yoruichi.vm.box = "precise64"
      yoruichi.vm.network :private_network, ip: "192.168.2.78"

      yoruichi.vm.provision "ansible" do |ansible|
        ansible.playbook = "vagrant-yoruichi.yml"
        ansible.inventory_path = "./inventories/vagrant"
      end
  end

  config.vm.define "base" do |base|
      base.vm.box = "precise64"
      base.vm.network :private_network, ip: "192.168.2.84"
      base.vm.synced_folder "/Users/poliu/projects/rise/api/logs", "/home/vagrant/logs"

      base.vm.provision "ansible" do |ansible|
        ansible.playbook = "vagrant.yml"
        ansible.inventory_path = "./inventories/vagrant"
        #ansible.verbose = 'vvvv'
        #ansible.host_key_checking = "false"

      end


      #Extra goodies for reference
      #base.vm.network :forwarded_port, guest: 80, host: 8080
      #config.vm.network :public_network, bridge: "en0: Wi-Fi (AirPort)"

      #config.vm.provider :virtualbox do |vb|
        #vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      #end
  end

end
