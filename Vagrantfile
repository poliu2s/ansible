Vagrant.configure("2") do |config|
  config.vm.define "docker" do |docker|
      docker.vm.box = "precise64"
      docker.vm.network :private_network, ip: "192.168.2.84"

      docker.vm.provision "ansible" do |ansible|
        ansible.playbook = "vagrant-docker.yml"
        ansible.inventory_path = "./inventories/vagrant"
      end
  end

  config.vm.define "base" do |base|
      base.vm.box = "precise64"
      base.vm.network :private_network, ip: "192.168.2.84"

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
