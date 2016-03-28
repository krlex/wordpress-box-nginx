# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"
#Vagrantf-box uploaded from ftp.lugons.org
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ftp://ftp.lugons.org/vagrant/debian-8.0-x86_64.box"
  config.vm.network :private_network, ip: "192.168.50.50"
  config.vm.provision "ansible" do |ansible|
    ansible.verbose = "v"
    ansible.playbook = "setup.yml"
    ansible.inventory_path = "vagrant-inventory"
    ansible.host_key_checking = "false"
    ansible.limit = "all"
  end
  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
  end
  config.vm.synced_folder ".", "/vagrant", owner:"www-data", group:"www-data", mount_options:["dmode=775", "fmode=775"]
end
