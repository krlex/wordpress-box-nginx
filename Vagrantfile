# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "centos/8"
  config.vm.network :private_network, ip: "192.168.33.11"
  config.vm.provision :ansible do |ansible|
    ansible.playbook = "playbook.yml"
    ansible.host_key_checking = false
    ansible.groups = {
        "vagrant" => ["default"],
    }
  end
end
