Vagrant.configure("2") do |config|
  config.vm.box = "precise64"
  config.vm.network :forwarded_port, guest: 80, host: 8080

  #config.vm.network :public_network, bridge: "en0: Wi-Fi (AirPort)"
  config.vm.network :private_network, ip: "192.168.2.84"

  #config.vm.provider :virtualbox do |vb|
    #vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
  #end

  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "vagrant.yml"
    ansible.inventory_path = "./inventories/hosts"
    #ansible.verbose = 'vvvv'
    #ansible.host_key_checking = "false"
  end
end
