<?php

/*
 * This file is part of the cv4pve-api-php https://github.com/Corsinvest/cv4pve-api-php,
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Corsinvest Enterprise License (CEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * Copyright (C) 2016 Corsinvest Srl	GPLv3 and CEL
 */

/**
 * Proxmox VE Client Api
 */

namespace Corsinvest\ProxmoxVE\Api {

    /**
     * Class Client
     * @package Corsinvest\ProxmoxVE\Api
     *
     * Proxmox VE Client
     */
    class PveClient extends PveClientBase {

        /**
         * @ignore
         */
        private $client;

        /**
         * Client constructor.
         * @param string $hostname Host Proxmox VE
         * @param int $port Port connection default 8006
         */
        function __construct($hostname, $port = 8006) {
            parent::__construct($hostname, $port);
            $this->client = $this;
        }

        /**
         * Add index parameter to parameters
         * @param array $params Parameters
         * @param string $name name
         * @param array $values values
         */
        public function addIndexedParameter(&$params, $name, $values) {
            if ($values == null) {
                return;
            }
            foreach ($values as $key => $value) {
                $params[$name . $key] = $value;
            }
        }

        /**
         * @ignore
         */
        private $cluster;

        /**
         * Get Cluster
         * @return PVECluster
         */
        public function getCluster() {
            return $this->cluster ?: ($this->cluster = new PVECluster($this->client));
        }

        /**
         * @ignore
         */
        private $nodes;

        /**
         * Get Nodes
         * @return PVENodes
         */
        public function getNodes() {
            return $this->nodes ?: ($this->nodes = new PVENodes($this->client));
        }

        /**
         * @ignore
         */
        private $storage;

        /**
         * Get Storage
         * @return PVEStorage
         */
        public function getStorage() {
            return $this->storage ?: ($this->storage = new PVEStorage($this->client));
        }

        /**
         * @ignore
         */
        private $access;

        /**
         * Get Access
         * @return PVEAccess
         */
        public function getAccess() {
            return $this->access ?: ($this->access = new PVEAccess($this->client));
        }

        /**
         * @ignore
         */
        private $pools;

        /**
         * Get Pools
         * @return PVEPools
         */
        public function getPools() {
            return $this->pools ?: ($this->pools = new PVEPools($this->client));
        }

        /**
         * @ignore
         */
        private $version;

        /**
         * Get Version
         * @return PVEVersion
         */
        public function getVersion() {
            return $this->version ?: ($this->version = new PVEVersion($this->client));
        }

    }

    /**
     * Class PVECluster
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECluster {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $replication;

        /**
         * Get ClusterReplication
         * @return PVEClusterReplication
         */
        public function getReplication() {
            return $this->replication ?: ($this->replication = new PVEClusterReplication($this->client));
        }

        /**
         * @ignore
         */
        private $metrics;

        /**
         * Get ClusterMetrics
         * @return PVEClusterMetrics
         */
        public function getMetrics() {
            return $this->metrics ?: ($this->metrics = new PVEClusterMetrics($this->client));
        }

        /**
         * @ignore
         */
        private $config;

        /**
         * Get ClusterConfig
         * @return PVEClusterConfig
         */
        public function getConfig() {
            return $this->config ?: ($this->config = new PVEClusterConfig($this->client));
        }

        /**
         * @ignore
         */
        private $firewall;

        /**
         * Get ClusterFirewall
         * @return PVEClusterFirewall
         */
        public function getFirewall() {
            return $this->firewall ?: ($this->firewall = new PVEClusterFirewall($this->client));
        }

        /**
         * @ignore
         */
        private $backup;

        /**
         * Get ClusterBackup
         * @return PVEClusterBackup
         */
        public function getBackup() {
            return $this->backup ?: ($this->backup = new PVEClusterBackup($this->client));
        }

        /**
         * @ignore
         */
        private $backup_Info;

        /**
         * Get ClusterBackup_Info
         * @return PVEClusterBackup_Info
         */
        public function getBackup_Info() {
            return $this->backup_Info ?: ($this->backup_Info = new PVEClusterBackup_Info($this->client));
        }

        /**
         * @ignore
         */
        private $ha;

        /**
         * Get ClusterHa
         * @return PVEClusterHa
         */
        public function getHa() {
            return $this->ha ?: ($this->ha = new PVEClusterHa($this->client));
        }

        /**
         * @ignore
         */
        private $acme;

        /**
         * Get ClusterAcme
         * @return PVEClusterAcme
         */
        public function getAcme() {
            return $this->acme ?: ($this->acme = new PVEClusterAcme($this->client));
        }

        /**
         * @ignore
         */
        private $ceph;

        /**
         * Get ClusterCeph
         * @return PVEClusterCeph
         */
        public function getCeph() {
            return $this->ceph ?: ($this->ceph = new PVEClusterCeph($this->client));
        }

        /**
         * @ignore
         */
        private $sdn;

        /**
         * Get ClusterSdn
         * @return PVEClusterSdn
         */
        public function getSdn() {
            return $this->sdn ?: ($this->sdn = new PVEClusterSdn($this->client));
        }

        /**
         * @ignore
         */
        private $log;

        /**
         * Get ClusterLog
         * @return PVEClusterLog
         */
        public function getLog() {
            return $this->log ?: ($this->log = new PVEClusterLog($this->client));
        }

        /**
         * @ignore
         */
        private $resources;

        /**
         * Get ClusterResources
         * @return PVEClusterResources
         */
        public function getResources() {
            return $this->resources ?: ($this->resources = new PVEClusterResources($this->client));
        }

        /**
         * @ignore
         */
        private $tasks;

        /**
         * Get ClusterTasks
         * @return PVEClusterTasks
         */
        public function getTasks() {
            return $this->tasks ?: ($this->tasks = new PVEClusterTasks($this->client));
        }

        /**
         * @ignore
         */
        private $options;

        /**
         * Get ClusterOptions
         * @return PVEClusterOptions
         */
        public function getOptions() {
            return $this->options ?: ($this->options = new PVEClusterOptions($this->client));
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get ClusterStatus
         * @return PVEClusterStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVEClusterStatus($this->client));
        }

        /**
         * @ignore
         */
        private $nextid;

        /**
         * Get ClusterNextid
         * @return PVEClusterNextid
         */
        public function getNextid() {
            return $this->nextid ?: ($this->nextid = new PVEClusterNextid($this->client));
        }

        /**
         * Cluster index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster");
        }

        /**
         * Cluster index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEClusterReplication
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterReplication {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemReplicationClusterId
         * @param id
         * @return PVEItemReplicationClusterId
         */
        public function get($id) {
            return new PVEItemReplicationClusterId($this->client, $id);
        }

        /**
         * List replication jobs.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/replication");
        }

        /**
         * List replication jobs.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create a new replication job
         * @param string $id Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '&amp;lt;GUEST&amp;gt;-&amp;lt;JOBNUM&amp;gt;'.
         * @param string $target Target node.
         * @param string $type Section type.
         *   Enum: local
         * @param string $comment Description.
         * @param bool $disable Flag to disable/deactivate the entry.
         * @param float $rate Rate limit in mbps (megabytes per second) as floating point number.
         * @param string $remove_job Mark the replication job for removal. The job will remove all local replication snapshots. When set to 'full', it also tries to remove replicated volumes on the target. The job then removes itself from the configuration file.
         *   Enum: local,full
         * @param string $schedule Storage replication schedule. The format is a subset of `systemd` calendar events.
         * @param string $source For internal use, to detect if the guest was stolen.
         * @return Result
         */
        public function createRest($id, $target, $type, $comment = null, $disable = null, $rate = null, $remove_job = null, $schedule = null, $source = null) {
            $params = ['id' => $id,
                'target' => $target,
                'type' => $type,
                'comment' => $comment,
                'disable' => $disable,
                'rate' => $rate,
                'remove_job' => $remove_job,
                'schedule' => $schedule,
                'source' => $source];
            return $this->client->create("/cluster/replication", $params);
        }

        /**
         * Create a new replication job
         * @param string $id Replication Job ID. The ID is composed of a Guest ID and a job number, separated by a hyphen, i.e. '&amp;lt;GUEST&amp;gt;-&amp;lt;JOBNUM&amp;gt;'.
         * @param string $target Target node.
         * @param string $type Section type.
         *   Enum: local
         * @param string $comment Description.
         * @param bool $disable Flag to disable/deactivate the entry.
         * @param float $rate Rate limit in mbps (megabytes per second) as floating point number.
         * @param string $remove_job Mark the replication job for removal. The job will remove all local replication snapshots. When set to 'full', it also tries to remove replicated volumes on the target. The job then removes itself from the configuration file.
         *   Enum: local,full
         * @param string $schedule Storage replication schedule. The format is a subset of `systemd` calendar events.
         * @param string $source For internal use, to detect if the guest was stolen.
         * @return Result
         */
        public function create($id, $target, $type, $comment = null, $disable = null, $rate = null, $remove_job = null, $schedule = null, $source = null) {
            return $this->createRest($id, $target, $type, $comment, $disable, $rate, $remove_job, $schedule, $source);
        }

    }

    /**
     * Class PVEItemReplicationClusterId
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemReplicationClusterId {

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $id) {
            $this->client = $client;
            $this->id = $id;
        }

        /**
         * Mark replication job for removal.
         * @param bool $force Will remove the jobconfig entry, but will not cleanup.
         * @param bool $keep Keep replicated data at target (do not remove).
         * @return Result
         */
        public function deleteRest($force = null, $keep = null) {
            $params = ['force' => $force,
                'keep' => $keep];
            return $this->client->delete("/cluster/replication/{$this->id}", $params);
        }

        /**
         * Mark replication job for removal.
         * @param bool $force Will remove the jobconfig entry, but will not cleanup.
         * @param bool $keep Keep replicated data at target (do not remove).
         * @return Result
         */
        public function delete($force = null, $keep = null) {
            return $this->deleteRest($force, $keep);
        }

        /**
         * Read replication job configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/replication/{$this->id}");
        }

        /**
         * Read replication job configuration.
         * @return Result
         */
        public function read() {
            return $this->getRest();
        }

        /**
         * Update replication job configuration.
         * @param string $comment Description.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $disable Flag to disable/deactivate the entry.
         * @param float $rate Rate limit in mbps (megabytes per second) as floating point number.
         * @param string $remove_job Mark the replication job for removal. The job will remove all local replication snapshots. When set to 'full', it also tries to remove replicated volumes on the target. The job then removes itself from the configuration file.
         *   Enum: local,full
         * @param string $schedule Storage replication schedule. The format is a subset of `systemd` calendar events.
         * @param string $source For internal use, to detect if the guest was stolen.
         * @return Result
         */
        public function setRest($comment = null, $delete = null, $digest = null, $disable = null, $rate = null, $remove_job = null, $schedule = null, $source = null) {
            $params = ['comment' => $comment,
                'delete' => $delete,
                'digest' => $digest,
                'disable' => $disable,
                'rate' => $rate,
                'remove_job' => $remove_job,
                'schedule' => $schedule,
                'source' => $source];
            return $this->client->set("/cluster/replication/{$this->id}", $params);
        }

        /**
         * Update replication job configuration.
         * @param string $comment Description.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $disable Flag to disable/deactivate the entry.
         * @param float $rate Rate limit in mbps (megabytes per second) as floating point number.
         * @param string $remove_job Mark the replication job for removal. The job will remove all local replication snapshots. When set to 'full', it also tries to remove replicated volumes on the target. The job then removes itself from the configuration file.
         *   Enum: local,full
         * @param string $schedule Storage replication schedule. The format is a subset of `systemd` calendar events.
         * @param string $source For internal use, to detect if the guest was stolen.
         * @return Result
         */
        public function update($comment = null, $delete = null, $digest = null, $disable = null, $rate = null, $remove_job = null, $schedule = null, $source = null) {
            return $this->setRest($comment, $delete, $digest, $disable, $rate, $remove_job, $schedule, $source);
        }

    }

    /**
     * Class PVEClusterMetrics
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterMetrics {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $server;

        /**
         * Get MetricsClusterServer
         * @return PVEMetricsClusterServer
         */
        public function getServer() {
            return $this->server ?: ($this->server = new PVEMetricsClusterServer($this->client));
        }

        /**
         * Metrics index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/metrics");
        }

        /**
         * Metrics index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEMetricsClusterServer
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEMetricsClusterServer {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemServerMetricsClusterId
         * @param id
         * @return PVEItemServerMetricsClusterId
         */
        public function get($id) {
            return new PVEItemServerMetricsClusterId($this->client, $id);
        }

        /**
         * List configured metric servers.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/metrics/server");
        }

        /**
         * List configured metric servers.
         * @return Result
         */
        public function serverIndex() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemServerMetricsClusterId
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemServerMetricsClusterId {

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $id) {
            $this->client = $client;
            $this->id = $id;
        }

        /**
         * Remove Metric server.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/metrics/server/{$this->id}");
        }

        /**
         * Remove Metric server.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read metric server configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/metrics/server/{$this->id}");
        }

        /**
         * Read metric server configuration.
         * @return Result
         */
        public function read() {
            return $this->getRest();
        }

        /**
         * Create a new external metric server config
         * @param int $port server network port
         * @param string $server server dns name or IP address
         * @param string $type Plugin type.
         *   Enum: graphite,influxdb
         * @param string $api_path_prefix An API path prefix inserted between '&amp;lt;host&amp;gt;:&amp;lt;port&amp;gt;/' and '/api2/'. Can be useful if the InfluxDB service runs behind a reverse proxy.
         * @param string $bucket The InfluxDB bucket/db. Only necessary when using the http v2 api.
         * @param bool $disable Flag to disable the plugin.
         * @param string $influxdbproto 
         *   Enum: udp,http,https
         * @param int $max_body_size InfluxDB max-body-size in bytes. Requests are batched up to this size.
         * @param int $mtu MTU for metrics transmission over UDP
         * @param string $organization The InfluxDB organization. Only necessary when using the http v2 api. Has no meaning when using v2 compatibility api.
         * @param string $path root graphite path (ex: proxmox.mycluster.mykey)
         * @param string $proto Protocol to send graphite data. TCP or UDP (default)
         *   Enum: udp,tcp
         * @param int $timeout graphite TCP socket timeout (default=1)
         * @param string $token The InfluxDB access token. Only necessary when using the http v2 api. If the v2 compatibility api is used, use 'user:password' instead.
         * @return Result
         */
        public function createRest($port, $server, $type, $api_path_prefix = null, $bucket = null, $disable = null, $influxdbproto = null, $max_body_size = null, $mtu = null, $organization = null, $path = null, $proto = null, $timeout = null, $token = null) {
            $params = ['port' => $port,
                'server' => $server,
                'type' => $type,
                'api-path-prefix' => $api_path_prefix,
                'bucket' => $bucket,
                'disable' => $disable,
                'influxdbproto' => $influxdbproto,
                'max-body-size' => $max_body_size,
                'mtu' => $mtu,
                'organization' => $organization,
                'path' => $path,
                'proto' => $proto,
                'timeout' => $timeout,
                'token' => $token];
            return $this->client->create("/cluster/metrics/server/{$this->id}", $params);
        }

        /**
         * Create a new external metric server config
         * @param int $port server network port
         * @param string $server server dns name or IP address
         * @param string $type Plugin type.
         *   Enum: graphite,influxdb
         * @param string $api_path_prefix An API path prefix inserted between '&amp;lt;host&amp;gt;:&amp;lt;port&amp;gt;/' and '/api2/'. Can be useful if the InfluxDB service runs behind a reverse proxy.
         * @param string $bucket The InfluxDB bucket/db. Only necessary when using the http v2 api.
         * @param bool $disable Flag to disable the plugin.
         * @param string $influxdbproto 
         *   Enum: udp,http,https
         * @param int $max_body_size InfluxDB max-body-size in bytes. Requests are batched up to this size.
         * @param int $mtu MTU for metrics transmission over UDP
         * @param string $organization The InfluxDB organization. Only necessary when using the http v2 api. Has no meaning when using v2 compatibility api.
         * @param string $path root graphite path (ex: proxmox.mycluster.mykey)
         * @param string $proto Protocol to send graphite data. TCP or UDP (default)
         *   Enum: udp,tcp
         * @param int $timeout graphite TCP socket timeout (default=1)
         * @param string $token The InfluxDB access token. Only necessary when using the http v2 api. If the v2 compatibility api is used, use 'user:password' instead.
         * @return Result
         */
        public function create($port, $server, $type, $api_path_prefix = null, $bucket = null, $disable = null, $influxdbproto = null, $max_body_size = null, $mtu = null, $organization = null, $path = null, $proto = null, $timeout = null, $token = null) {
            return $this->createRest($port, $server, $type, $api_path_prefix, $bucket, $disable, $influxdbproto, $max_body_size, $mtu, $organization, $path, $proto, $timeout, $token);
        }

        /**
         * Update metric server configuration.
         * @param int $port server network port
         * @param string $server server dns name or IP address
         * @param string $api_path_prefix An API path prefix inserted between '&amp;lt;host&amp;gt;:&amp;lt;port&amp;gt;/' and '/api2/'. Can be useful if the InfluxDB service runs behind a reverse proxy.
         * @param string $bucket The InfluxDB bucket/db. Only necessary when using the http v2 api.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $disable Flag to disable the plugin.
         * @param string $influxdbproto 
         *   Enum: udp,http,https
         * @param int $max_body_size InfluxDB max-body-size in bytes. Requests are batched up to this size.
         * @param int $mtu MTU for metrics transmission over UDP
         * @param string $organization The InfluxDB organization. Only necessary when using the http v2 api. Has no meaning when using v2 compatibility api.
         * @param string $path root graphite path (ex: proxmox.mycluster.mykey)
         * @param string $proto Protocol to send graphite data. TCP or UDP (default)
         *   Enum: udp,tcp
         * @param int $timeout graphite TCP socket timeout (default=1)
         * @param string $token The InfluxDB access token. Only necessary when using the http v2 api. If the v2 compatibility api is used, use 'user:password' instead.
         * @return Result
         */
        public function setRest($port, $server, $api_path_prefix = null, $bucket = null, $delete = null, $digest = null, $disable = null, $influxdbproto = null, $max_body_size = null, $mtu = null, $organization = null, $path = null, $proto = null, $timeout = null, $token = null) {
            $params = ['port' => $port,
                'server' => $server,
                'api-path-prefix' => $api_path_prefix,
                'bucket' => $bucket,
                'delete' => $delete,
                'digest' => $digest,
                'disable' => $disable,
                'influxdbproto' => $influxdbproto,
                'max-body-size' => $max_body_size,
                'mtu' => $mtu,
                'organization' => $organization,
                'path' => $path,
                'proto' => $proto,
                'timeout' => $timeout,
                'token' => $token];
            return $this->client->set("/cluster/metrics/server/{$this->id}", $params);
        }

        /**
         * Update metric server configuration.
         * @param int $port server network port
         * @param string $server server dns name or IP address
         * @param string $api_path_prefix An API path prefix inserted between '&amp;lt;host&amp;gt;:&amp;lt;port&amp;gt;/' and '/api2/'. Can be useful if the InfluxDB service runs behind a reverse proxy.
         * @param string $bucket The InfluxDB bucket/db. Only necessary when using the http v2 api.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $disable Flag to disable the plugin.
         * @param string $influxdbproto 
         *   Enum: udp,http,https
         * @param int $max_body_size InfluxDB max-body-size in bytes. Requests are batched up to this size.
         * @param int $mtu MTU for metrics transmission over UDP
         * @param string $organization The InfluxDB organization. Only necessary when using the http v2 api. Has no meaning when using v2 compatibility api.
         * @param string $path root graphite path (ex: proxmox.mycluster.mykey)
         * @param string $proto Protocol to send graphite data. TCP or UDP (default)
         *   Enum: udp,tcp
         * @param int $timeout graphite TCP socket timeout (default=1)
         * @param string $token The InfluxDB access token. Only necessary when using the http v2 api. If the v2 compatibility api is used, use 'user:password' instead.
         * @return Result
         */
        public function update($port, $server, $api_path_prefix = null, $bucket = null, $delete = null, $digest = null, $disable = null, $influxdbproto = null, $max_body_size = null, $mtu = null, $organization = null, $path = null, $proto = null, $timeout = null, $token = null) {
            return $this->setRest($port, $server, $api_path_prefix, $bucket, $delete, $digest, $disable, $influxdbproto, $max_body_size, $mtu, $organization, $path, $proto, $timeout, $token);
        }

    }

    /**
     * Class PVEClusterConfig
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterConfig {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $apiversion;

        /**
         * Get ConfigClusterApiversion
         * @return PVEConfigClusterApiversion
         */
        public function getApiversion() {
            return $this->apiversion ?: ($this->apiversion = new PVEConfigClusterApiversion($this->client));
        }

        /**
         * @ignore
         */
        private $nodes;

        /**
         * Get ConfigClusterNodes
         * @return PVEConfigClusterNodes
         */
        public function getNodes() {
            return $this->nodes ?: ($this->nodes = new PVEConfigClusterNodes($this->client));
        }

        /**
         * @ignore
         */
        private $join;

        /**
         * Get ConfigClusterJoin
         * @return PVEConfigClusterJoin
         */
        public function getJoin() {
            return $this->join ?: ($this->join = new PVEConfigClusterJoin($this->client));
        }

        /**
         * @ignore
         */
        private $totem;

        /**
         * Get ConfigClusterTotem
         * @return PVEConfigClusterTotem
         */
        public function getTotem() {
            return $this->totem ?: ($this->totem = new PVEConfigClusterTotem($this->client));
        }

        /**
         * @ignore
         */
        private $qdevice;

        /**
         * Get ConfigClusterQdevice
         * @return PVEConfigClusterQdevice
         */
        public function getQdevice() {
            return $this->qdevice ?: ($this->qdevice = new PVEConfigClusterQdevice($this->client));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/config");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Generate new cluster configuration. If no links given, default to local IP address as link0.
         * @param string $clustername The name of the cluster.
         * @param array $linkN Address and priority information of a single corosync link. (up to 8 links supported; link0..link7)
         * @param int $nodeid Node id for this node.
         * @param int $votes Number of votes for this node.
         * @return Result
         */
        public function createRest($clustername, $linkN = null, $nodeid = null, $votes = null) {
            $params = ['clustername' => $clustername,
                'nodeid' => $nodeid,
                'votes' => $votes];
            $this->client->addIndexedParameter($params, 'link', $linkN);
            return $this->client->create("/cluster/config", $params);
        }

        /**
         * Generate new cluster configuration. If no links given, default to local IP address as link0.
         * @param string $clustername The name of the cluster.
         * @param array $linkN Address and priority information of a single corosync link. (up to 8 links supported; link0..link7)
         * @param int $nodeid Node id for this node.
         * @param int $votes Number of votes for this node.
         * @return Result
         */
        public function create($clustername, $linkN = null, $nodeid = null, $votes = null) {
            return $this->createRest($clustername, $linkN, $nodeid, $votes);
        }

    }

    /**
     * Class PVEConfigClusterApiversion
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEConfigClusterApiversion {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Return the version of the cluster join API available on this node.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/config/apiversion");
        }

        /**
         * Return the version of the cluster join API available on this node.
         * @return Result
         */
        public function joinApiVersion() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEConfigClusterNodes
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEConfigClusterNodes {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemNodesConfigClusterNode
         * @param node
         * @return PVEItemNodesConfigClusterNode
         */
        public function get($node) {
            return new PVEItemNodesConfigClusterNode($this->client, $node);
        }

        /**
         * Corosync node list.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/config/nodes");
        }

        /**
         * Corosync node list.
         * @return Result
         */
        public function nodes() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemNodesConfigClusterNode
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemNodesConfigClusterNode {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Removes a node from the cluster configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/config/nodes/{$this->node}");
        }

        /**
         * Removes a node from the cluster configuration.
         * @return Result
         */
        public function delnode() {
            return $this->deleteRest();
        }

        /**
         * Adds a node to the cluster configuration. This call is for internal use.
         * @param int $apiversion The JOIN_API_VERSION of the new node.
         * @param bool $force Do not throw error if node already exists.
         * @param array $linkN Address and priority information of a single corosync link. (up to 8 links supported; link0..link7)
         * @param string $new_node_ip IP Address of node to add. Used as fallback if no links are given.
         * @param int $nodeid Node id for this node.
         * @param int $votes Number of votes for this node
         * @return Result
         */
        public function createRest($apiversion = null, $force = null, $linkN = null, $new_node_ip = null, $nodeid = null, $votes = null) {
            $params = ['apiversion' => $apiversion,
                'force' => $force,
                'new_node_ip' => $new_node_ip,
                'nodeid' => $nodeid,
                'votes' => $votes];
            $this->client->addIndexedParameter($params, 'link', $linkN);
            return $this->client->create("/cluster/config/nodes/{$this->node}", $params);
        }

        /**
         * Adds a node to the cluster configuration. This call is for internal use.
         * @param int $apiversion The JOIN_API_VERSION of the new node.
         * @param bool $force Do not throw error if node already exists.
         * @param array $linkN Address and priority information of a single corosync link. (up to 8 links supported; link0..link7)
         * @param string $new_node_ip IP Address of node to add. Used as fallback if no links are given.
         * @param int $nodeid Node id for this node.
         * @param int $votes Number of votes for this node
         * @return Result
         */
        public function addnode($apiversion = null, $force = null, $linkN = null, $new_node_ip = null, $nodeid = null, $votes = null) {
            return $this->createRest($apiversion, $force, $linkN, $new_node_ip, $nodeid, $votes);
        }

    }

    /**
     * Class PVEConfigClusterJoin
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEConfigClusterJoin {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get information needed to join this cluster over the connected node.
         * @param string $node The node for which the joinee gets the nodeinfo. 
         * @return Result
         */
        public function getRest($node = null) {
            $params = ['node' => $node];
            return $this->client->get("/cluster/config/join", $params);
        }

        /**
         * Get information needed to join this cluster over the connected node.
         * @param string $node The node for which the joinee gets the nodeinfo. 
         * @return Result
         */
        public function joinInfo($node = null) {
            return $this->getRest($node);
        }

        /**
         * Joins this node into an existing cluster. If no links are given, default to IP resolved by node's hostname on single link (fallback fails for clusters with multiple links).
         * @param string $fingerprint Certificate SHA 256 fingerprint.
         * @param string $hostname Hostname (or IP) of an existing cluster member.
         * @param string $password Superuser (root) password of peer node.
         * @param bool $force Do not throw error if node already exists.
         * @param array $linkN Address and priority information of a single corosync link. (up to 8 links supported; link0..link7)
         * @param int $nodeid Node id for this node.
         * @param int $votes Number of votes for this node
         * @return Result
         */
        public function createRest($fingerprint, $hostname, $password, $force = null, $linkN = null, $nodeid = null, $votes = null) {
            $params = ['fingerprint' => $fingerprint,
                'hostname' => $hostname,
                'password' => $password,
                'force' => $force,
                'nodeid' => $nodeid,
                'votes' => $votes];
            $this->client->addIndexedParameter($params, 'link', $linkN);
            return $this->client->create("/cluster/config/join", $params);
        }

        /**
         * Joins this node into an existing cluster. If no links are given, default to IP resolved by node's hostname on single link (fallback fails for clusters with multiple links).
         * @param string $fingerprint Certificate SHA 256 fingerprint.
         * @param string $hostname Hostname (or IP) of an existing cluster member.
         * @param string $password Superuser (root) password of peer node.
         * @param bool $force Do not throw error if node already exists.
         * @param array $linkN Address and priority information of a single corosync link. (up to 8 links supported; link0..link7)
         * @param int $nodeid Node id for this node.
         * @param int $votes Number of votes for this node
         * @return Result
         */
        public function join($fingerprint, $hostname, $password, $force = null, $linkN = null, $nodeid = null, $votes = null) {
            return $this->createRest($fingerprint, $hostname, $password, $force, $linkN, $nodeid, $votes);
        }

    }

    /**
     * Class PVEConfigClusterTotem
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEConfigClusterTotem {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get corosync totem protocol settings.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/config/totem");
        }

        /**
         * Get corosync totem protocol settings.
         * @return Result
         */
        public function totem() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEConfigClusterQdevice
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEConfigClusterQdevice {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get QDevice status
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/config/qdevice");
        }

        /**
         * Get QDevice status
         * @return Result
         */
        public function status() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEClusterFirewall
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterFirewall {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $groups;

        /**
         * Get FirewallClusterGroups
         * @return PVEFirewallClusterGroups
         */
        public function getGroups() {
            return $this->groups ?: ($this->groups = new PVEFirewallClusterGroups($this->client));
        }

        /**
         * @ignore
         */
        private $rules;

        /**
         * Get FirewallClusterRules
         * @return PVEFirewallClusterRules
         */
        public function getRules() {
            return $this->rules ?: ($this->rules = new PVEFirewallClusterRules($this->client));
        }

        /**
         * @ignore
         */
        private $ipset;

        /**
         * Get FirewallClusterIpset
         * @return PVEFirewallClusterIpset
         */
        public function getIpset() {
            return $this->ipset ?: ($this->ipset = new PVEFirewallClusterIpset($this->client));
        }

        /**
         * @ignore
         */
        private $aliases;

        /**
         * Get FirewallClusterAliases
         * @return PVEFirewallClusterAliases
         */
        public function getAliases() {
            return $this->aliases ?: ($this->aliases = new PVEFirewallClusterAliases($this->client));
        }

        /**
         * @ignore
         */
        private $options;

        /**
         * Get FirewallClusterOptions
         * @return PVEFirewallClusterOptions
         */
        public function getOptions() {
            return $this->options ?: ($this->options = new PVEFirewallClusterOptions($this->client));
        }

        /**
         * @ignore
         */
        private $macros;

        /**
         * Get FirewallClusterMacros
         * @return PVEFirewallClusterMacros
         */
        public function getMacros() {
            return $this->macros ?: ($this->macros = new PVEFirewallClusterMacros($this->client));
        }

        /**
         * @ignore
         */
        private $refs;

        /**
         * Get FirewallClusterRefs
         * @return PVEFirewallClusterRefs
         */
        public function getRefs() {
            return $this->refs ?: ($this->refs = new PVEFirewallClusterRefs($this->client));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEFirewallClusterGroups
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallClusterGroups {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemGroupsFirewallClusterGroup
         * @param group
         * @return PVEItemGroupsFirewallClusterGroup
         */
        public function get($group) {
            return new PVEItemGroupsFirewallClusterGroup($this->client, $group);
        }

        /**
         * List security groups.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/groups");
        }

        /**
         * List security groups.
         * @return Result
         */
        public function listSecurityGroups() {
            return $this->getRest();
        }

        /**
         * Create new security group.
         * @param string $group Security Group name.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename/update an existing security group. You can set 'rename' to the same value as 'name' to update the 'comment' of an existing group.
         * @return Result
         */
        public function createRest($group, $comment = null, $digest = null, $rename = null) {
            $params = ['group' => $group,
                'comment' => $comment,
                'digest' => $digest,
                'rename' => $rename];
            return $this->client->create("/cluster/firewall/groups", $params);
        }

        /**
         * Create new security group.
         * @param string $group Security Group name.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename/update an existing security group. You can set 'rename' to the same value as 'name' to update the 'comment' of an existing group.
         * @return Result
         */
        public function createSecurityGroup($group, $comment = null, $digest = null, $rename = null) {
            return $this->createRest($group, $comment, $digest, $rename);
        }

    }

    /**
     * Class PVEItemGroupsFirewallClusterGroup
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemGroupsFirewallClusterGroup {

        /**
         * @ignore
         */
        private $group;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $group) {
            $this->client = $client;
            $this->group = $group;
        }

        /**
         * Get ItemGroupGroupsFirewallClusterPos
         * @param pos
         * @return PVEItemGroupGroupsFirewallClusterPos
         */
        public function get($pos) {
            return new PVEItemGroupGroupsFirewallClusterPos($this->client, $this->group, $pos);
        }

        /**
         * Delete security group.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/firewall/groups/{$this->group}");
        }

        /**
         * Delete security group.
         * @return Result
         */
        public function deleteSecurityGroup() {
            return $this->deleteRest();
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/groups/{$this->group}");
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRules() {
            return $this->getRest();
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRest($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            $params = ['action' => $action,
                'type' => $type,
                'comment' => $comment,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'pos' => $pos,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport];
            return $this->client->create("/cluster/firewall/groups/{$this->group}", $params);
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRule($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            return $this->createRest($action, $type, $comment, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $pos, $proto, $source, $sport);
        }

    }

    /**
     * Class PVEItemGroupGroupsFirewallClusterPos
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemGroupGroupsFirewallClusterPos {

        /**
         * @ignore
         */
        private $group;

        /**
         * @ignore
         */
        private $pos;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $group, $pos) {
            $this->client = $client;
            $this->group = $group;
            $this->pos = $pos;
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/cluster/firewall/groups/{$this->group}/{$this->pos}", $params);
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRule($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/groups/{$this->group}/{$this->pos}");
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRule() {
            return $this->getRest();
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function setRest($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            $params = ['action' => $action,
                'comment' => $comment,
                'delete' => $delete,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'moveto' => $moveto,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport,
                'type' => $type];
            return $this->client->set("/cluster/firewall/groups/{$this->group}/{$this->pos}", $params);
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function updateRule($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            return $this->setRest($action, $comment, $delete, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $moveto, $proto, $source, $sport, $type);
        }

    }

    /**
     * Class PVEFirewallClusterRules
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallClusterRules {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemRulesFirewallClusterPos
         * @param pos
         * @return PVEItemRulesFirewallClusterPos
         */
        public function get($pos) {
            return new PVEItemRulesFirewallClusterPos($this->client, $pos);
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/rules");
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRules() {
            return $this->getRest();
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRest($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            $params = ['action' => $action,
                'type' => $type,
                'comment' => $comment,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'pos' => $pos,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport];
            return $this->client->create("/cluster/firewall/rules", $params);
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRule($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            return $this->createRest($action, $type, $comment, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $pos, $proto, $source, $sport);
        }

    }

    /**
     * Class PVEItemRulesFirewallClusterPos
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemRulesFirewallClusterPos {

        /**
         * @ignore
         */
        private $pos;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $pos) {
            $this->client = $client;
            $this->pos = $pos;
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/cluster/firewall/rules/{$this->pos}", $params);
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRule($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/rules/{$this->pos}");
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRule() {
            return $this->getRest();
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function setRest($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            $params = ['action' => $action,
                'comment' => $comment,
                'delete' => $delete,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'moveto' => $moveto,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport,
                'type' => $type];
            return $this->client->set("/cluster/firewall/rules/{$this->pos}", $params);
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function updateRule($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            return $this->setRest($action, $comment, $delete, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $moveto, $proto, $source, $sport, $type);
        }

    }

    /**
     * Class PVEFirewallClusterIpset
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallClusterIpset {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemIpsetFirewallClusterName
         * @param name
         * @return PVEItemIpsetFirewallClusterName
         */
        public function get($name) {
            return new PVEItemIpsetFirewallClusterName($this->client, $name);
        }

        /**
         * List IPSets
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/ipset");
        }

        /**
         * List IPSets
         * @return Result
         */
        public function ipsetIndex() {
            return $this->getRest();
        }

        /**
         * Create new IPSet
         * @param string $name IP set name.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing IPSet. You can set 'rename' to the same value as 'name' to update the 'comment' of an existing IPSet.
         * @return Result
         */
        public function createRest($name, $comment = null, $digest = null, $rename = null) {
            $params = ['name' => $name,
                'comment' => $comment,
                'digest' => $digest,
                'rename' => $rename];
            return $this->client->create("/cluster/firewall/ipset", $params);
        }

        /**
         * Create new IPSet
         * @param string $name IP set name.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing IPSet. You can set 'rename' to the same value as 'name' to update the 'comment' of an existing IPSet.
         * @return Result
         */
        public function createIpset($name, $comment = null, $digest = null, $rename = null) {
            return $this->createRest($name, $comment, $digest, $rename);
        }

    }

    /**
     * Class PVEItemIpsetFirewallClusterName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemIpsetFirewallClusterName {

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $name) {
            $this->client = $client;
            $this->name = $name;
        }

        /**
         * Get ItemNameIpsetFirewallClusterCidr
         * @param cidr
         * @return PVEItemNameIpsetFirewallClusterCidr
         */
        public function get($cidr) {
            return new PVEItemNameIpsetFirewallClusterCidr($this->client, $this->name, $cidr);
        }

        /**
         * Delete IPSet
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/firewall/ipset/{$this->name}");
        }

        /**
         * Delete IPSet
         * @return Result
         */
        public function deleteIpset() {
            return $this->deleteRest();
        }

        /**
         * List IPSet content
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/ipset/{$this->name}");
        }

        /**
         * List IPSet content
         * @return Result
         */
        public function getIpset() {
            return $this->getRest();
        }

        /**
         * Add IP or Network to IPSet.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param bool $nomatch 
         * @return Result
         */
        public function createRest($cidr, $comment = null, $nomatch = null) {
            $params = ['cidr' => $cidr,
                'comment' => $comment,
                'nomatch' => $nomatch];
            return $this->client->create("/cluster/firewall/ipset/{$this->name}", $params);
        }

        /**
         * Add IP or Network to IPSet.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param bool $nomatch 
         * @return Result
         */
        public function createIp($cidr, $comment = null, $nomatch = null) {
            return $this->createRest($cidr, $comment, $nomatch);
        }

    }

    /**
     * Class PVEItemNameIpsetFirewallClusterCidr
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemNameIpsetFirewallClusterCidr {

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $cidr;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $name, $cidr) {
            $this->client = $client;
            $this->name = $name;
            $this->cidr = $cidr;
        }

        /**
         * Remove IP or Network from IPSet.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/cluster/firewall/ipset/{$this->name}/{$this->cidr}", $params);
        }

        /**
         * Remove IP or Network from IPSet.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function removeIp($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Read IP or Network settings from IPSet.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/ipset/{$this->name}/{$this->cidr}");
        }

        /**
         * Read IP or Network settings from IPSet.
         * @return Result
         */
        public function readIp() {
            return $this->getRest();
        }

        /**
         * Update IP or Network settings
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $nomatch 
         * @return Result
         */
        public function setRest($comment = null, $digest = null, $nomatch = null) {
            $params = ['comment' => $comment,
                'digest' => $digest,
                'nomatch' => $nomatch];
            return $this->client->set("/cluster/firewall/ipset/{$this->name}/{$this->cidr}", $params);
        }

        /**
         * Update IP or Network settings
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $nomatch 
         * @return Result
         */
        public function updateIp($comment = null, $digest = null, $nomatch = null) {
            return $this->setRest($comment, $digest, $nomatch);
        }

    }

    /**
     * Class PVEFirewallClusterAliases
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallClusterAliases {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemAliasesFirewallClusterName
         * @param name
         * @return PVEItemAliasesFirewallClusterName
         */
        public function get($name) {
            return new PVEItemAliasesFirewallClusterName($this->client, $name);
        }

        /**
         * List aliases
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/aliases");
        }

        /**
         * List aliases
         * @return Result
         */
        public function getAliases() {
            return $this->getRest();
        }

        /**
         * Create IP or Network Alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $name Alias name.
         * @param string $comment 
         * @return Result
         */
        public function createRest($cidr, $name, $comment = null) {
            $params = ['cidr' => $cidr,
                'name' => $name,
                'comment' => $comment];
            return $this->client->create("/cluster/firewall/aliases", $params);
        }

        /**
         * Create IP or Network Alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $name Alias name.
         * @param string $comment 
         * @return Result
         */
        public function createAlias($cidr, $name, $comment = null) {
            return $this->createRest($cidr, $name, $comment);
        }

    }

    /**
     * Class PVEItemAliasesFirewallClusterName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemAliasesFirewallClusterName {

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $name) {
            $this->client = $client;
            $this->name = $name;
        }

        /**
         * Remove IP or Network alias.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/cluster/firewall/aliases/{$this->name}", $params);
        }

        /**
         * Remove IP or Network alias.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function removeAlias($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Read alias.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/aliases/{$this->name}");
        }

        /**
         * Read alias.
         * @return Result
         */
        public function readAlias() {
            return $this->getRest();
        }

        /**
         * Update IP or Network alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing alias.
         * @return Result
         */
        public function setRest($cidr, $comment = null, $digest = null, $rename = null) {
            $params = ['cidr' => $cidr,
                'comment' => $comment,
                'digest' => $digest,
                'rename' => $rename];
            return $this->client->set("/cluster/firewall/aliases/{$this->name}", $params);
        }

        /**
         * Update IP or Network alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing alias.
         * @return Result
         */
        public function updateAlias($cidr, $comment = null, $digest = null, $rename = null) {
            return $this->setRest($cidr, $comment, $digest, $rename);
        }

    }

    /**
     * Class PVEFirewallClusterOptions
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallClusterOptions {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get Firewall options.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/options");
        }

        /**
         * Get Firewall options.
         * @return Result
         */
        public function getOptions() {
            return $this->getRest();
        }

        /**
         * Set Firewall options.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $ebtables Enable ebtables rules cluster wide.
         * @param int $enable Enable or disable the firewall cluster wide.
         * @param string $log_ratelimit Log ratelimiting settings
         * @param string $policy_in Input policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param string $policy_out Output policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @return Result
         */
        public function setRest($delete = null, $digest = null, $ebtables = null, $enable = null, $log_ratelimit = null, $policy_in = null, $policy_out = null) {
            $params = ['delete' => $delete,
                'digest' => $digest,
                'ebtables' => $ebtables,
                'enable' => $enable,
                'log_ratelimit' => $log_ratelimit,
                'policy_in' => $policy_in,
                'policy_out' => $policy_out];
            return $this->client->set("/cluster/firewall/options", $params);
        }

        /**
         * Set Firewall options.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $ebtables Enable ebtables rules cluster wide.
         * @param int $enable Enable or disable the firewall cluster wide.
         * @param string $log_ratelimit Log ratelimiting settings
         * @param string $policy_in Input policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param string $policy_out Output policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @return Result
         */
        public function setOptions($delete = null, $digest = null, $ebtables = null, $enable = null, $log_ratelimit = null, $policy_in = null, $policy_out = null) {
            return $this->setRest($delete, $digest, $ebtables, $enable, $log_ratelimit, $policy_in, $policy_out);
        }

    }

    /**
     * Class PVEFirewallClusterMacros
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallClusterMacros {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * List available macros
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/firewall/macros");
        }

        /**
         * List available macros
         * @return Result
         */
        public function getMacros() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEFirewallClusterRefs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallClusterRefs {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Lists possible IPSet/Alias reference which are allowed in source/dest properties.
         * @param string $type Only list references of specified type.
         *   Enum: alias,ipset
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/cluster/firewall/refs", $params);
        }

        /**
         * Lists possible IPSet/Alias reference which are allowed in source/dest properties.
         * @param string $type Only list references of specified type.
         *   Enum: alias,ipset
         * @return Result
         */
        public function refs($type = null) {
            return $this->getRest($type);
        }

    }

    /**
     * Class PVEClusterBackup
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterBackup {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemBackupClusterId
         * @param id
         * @return PVEItemBackupClusterId
         */
        public function get($id) {
            return new PVEItemBackupClusterId($this->client, $id);
        }

        /**
         * List vzdump backup schedule.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/backup");
        }

        /**
         * List vzdump backup schedule.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create new vzdump backup job.
         * @param string $starttime Job Start time.
         * @param bool $all Backup all known guest systems on this host.
         * @param int $bwlimit Limit I/O bandwidth (KBytes per second).
         * @param string $compress Compress dump file.
         *   Enum: 0,1,gzip,lzo,zstd
         * @param string $dow Day of week selection.
         * @param string $dumpdir Store resulting files to specified directory.
         * @param bool $enabled Enable or disable the job.
         * @param string $exclude Exclude specified guest systems (assumes --all)
         * @param string $exclude_path Exclude certain files/directories (shell globs). Paths starting with '/' are anchored to the container's root,  other paths match relative to each subdirectory.
         * @param int $ionice Set CFQ ionice priority.
         * @param int $lockwait Maximal time to wait for the global lock (minutes).
         * @param string $mailnotification Specify when to send an email
         *   Enum: always,failure
         * @param string $mailto Comma-separated list of email addresses or users that should receive email notifications.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per guest system.
         * @param string $mode Backup mode.
         *   Enum: snapshot,suspend,stop
         * @param string $node Only run if executed on this node.
         * @param int $pigz Use pigz instead of gzip when N&amp;gt;0. N=1 uses half of cores, N&amp;gt;1 uses N as thread count.
         * @param string $pool Backup all known guest systems included in the specified pool.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param bool $quiet Be quiet.
         * @param bool $remove Prune older backups according to 'prune-backups'.
         * @param string $script Use specified hook script.
         * @param bool $stdexcludes Exclude temporary files and logs.
         * @param bool $stop Stop running backup jobs on this host.
         * @param int $stopwait Maximal time to wait until a guest system is stopped (minutes).
         * @param string $storage Store resulting file to this storage.
         * @param string $tmpdir Store temporary files to specified directory.
         * @param string $vmid The ID of the guest system you want to backup.
         * @param int $zstd Zstd threads. N=0 uses half of the available cores, N&amp;gt;0 uses N as thread count.
         * @return Result
         */
        public function createRest($starttime, $all = null, $bwlimit = null, $compress = null, $dow = null, $dumpdir = null, $enabled = null, $exclude = null, $exclude_path = null, $ionice = null, $lockwait = null, $mailnotification = null, $mailto = null, $maxfiles = null, $mode = null, $node = null, $pigz = null, $pool = null, $prune_backups = null, $quiet = null, $remove = null, $script = null, $stdexcludes = null, $stop = null, $stopwait = null, $storage = null, $tmpdir = null, $vmid = null, $zstd = null) {
            $params = ['starttime' => $starttime,
                'all' => $all,
                'bwlimit' => $bwlimit,
                'compress' => $compress,
                'dow' => $dow,
                'dumpdir' => $dumpdir,
                'enabled' => $enabled,
                'exclude' => $exclude,
                'exclude-path' => $exclude_path,
                'ionice' => $ionice,
                'lockwait' => $lockwait,
                'mailnotification' => $mailnotification,
                'mailto' => $mailto,
                'maxfiles' => $maxfiles,
                'mode' => $mode,
                'node' => $node,
                'pigz' => $pigz,
                'pool' => $pool,
                'prune-backups' => $prune_backups,
                'quiet' => $quiet,
                'remove' => $remove,
                'script' => $script,
                'stdexcludes' => $stdexcludes,
                'stop' => $stop,
                'stopwait' => $stopwait,
                'storage' => $storage,
                'tmpdir' => $tmpdir,
                'vmid' => $vmid,
                'zstd' => $zstd];
            return $this->client->create("/cluster/backup", $params);
        }

        /**
         * Create new vzdump backup job.
         * @param string $starttime Job Start time.
         * @param bool $all Backup all known guest systems on this host.
         * @param int $bwlimit Limit I/O bandwidth (KBytes per second).
         * @param string $compress Compress dump file.
         *   Enum: 0,1,gzip,lzo,zstd
         * @param string $dow Day of week selection.
         * @param string $dumpdir Store resulting files to specified directory.
         * @param bool $enabled Enable or disable the job.
         * @param string $exclude Exclude specified guest systems (assumes --all)
         * @param string $exclude_path Exclude certain files/directories (shell globs). Paths starting with '/' are anchored to the container's root,  other paths match relative to each subdirectory.
         * @param int $ionice Set CFQ ionice priority.
         * @param int $lockwait Maximal time to wait for the global lock (minutes).
         * @param string $mailnotification Specify when to send an email
         *   Enum: always,failure
         * @param string $mailto Comma-separated list of email addresses or users that should receive email notifications.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per guest system.
         * @param string $mode Backup mode.
         *   Enum: snapshot,suspend,stop
         * @param string $node Only run if executed on this node.
         * @param int $pigz Use pigz instead of gzip when N&amp;gt;0. N=1 uses half of cores, N&amp;gt;1 uses N as thread count.
         * @param string $pool Backup all known guest systems included in the specified pool.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param bool $quiet Be quiet.
         * @param bool $remove Prune older backups according to 'prune-backups'.
         * @param string $script Use specified hook script.
         * @param bool $stdexcludes Exclude temporary files and logs.
         * @param bool $stop Stop running backup jobs on this host.
         * @param int $stopwait Maximal time to wait until a guest system is stopped (minutes).
         * @param string $storage Store resulting file to this storage.
         * @param string $tmpdir Store temporary files to specified directory.
         * @param string $vmid The ID of the guest system you want to backup.
         * @param int $zstd Zstd threads. N=0 uses half of the available cores, N&amp;gt;0 uses N as thread count.
         * @return Result
         */
        public function createJob($starttime, $all = null, $bwlimit = null, $compress = null, $dow = null, $dumpdir = null, $enabled = null, $exclude = null, $exclude_path = null, $ionice = null, $lockwait = null, $mailnotification = null, $mailto = null, $maxfiles = null, $mode = null, $node = null, $pigz = null, $pool = null, $prune_backups = null, $quiet = null, $remove = null, $script = null, $stdexcludes = null, $stop = null, $stopwait = null, $storage = null, $tmpdir = null, $vmid = null, $zstd = null) {
            return $this->createRest($starttime, $all, $bwlimit, $compress, $dow, $dumpdir, $enabled, $exclude, $exclude_path, $ionice, $lockwait, $mailnotification, $mailto, $maxfiles, $mode, $node, $pigz, $pool, $prune_backups, $quiet, $remove, $script, $stdexcludes, $stop, $stopwait, $storage, $tmpdir, $vmid, $zstd);
        }

    }

    /**
     * Class PVEItemBackupClusterId
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemBackupClusterId {

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $id) {
            $this->client = $client;
            $this->id = $id;
        }

        /**
         * @ignore
         */
        private $includedVolumes;

        /**
         * Get IdBackupClusterIncludedVolumes
         * @return PVEIdBackupClusterIncludedVolumes
         */
        public function getIncludedVolumes() {
            return $this->includedVolumes ?: ($this->includedVolumes = new PVEIdBackupClusterIncludedVolumes($this->client, $this->id));
        }

        /**
         * Delete vzdump backup job definition.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/backup/{$this->id}");
        }

        /**
         * Delete vzdump backup job definition.
         * @return Result
         */
        public function deleteJob() {
            return $this->deleteRest();
        }

        /**
         * Read vzdump backup job definition.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/backup/{$this->id}");
        }

        /**
         * Read vzdump backup job definition.
         * @return Result
         */
        public function readJob() {
            return $this->getRest();
        }

        /**
         * Update vzdump backup job definition.
         * @param string $starttime Job Start time.
         * @param bool $all Backup all known guest systems on this host.
         * @param int $bwlimit Limit I/O bandwidth (KBytes per second).
         * @param string $compress Compress dump file.
         *   Enum: 0,1,gzip,lzo,zstd
         * @param string $delete A list of settings you want to delete.
         * @param string $dow Day of week selection.
         * @param string $dumpdir Store resulting files to specified directory.
         * @param bool $enabled Enable or disable the job.
         * @param string $exclude Exclude specified guest systems (assumes --all)
         * @param string $exclude_path Exclude certain files/directories (shell globs). Paths starting with '/' are anchored to the container's root,  other paths match relative to each subdirectory.
         * @param int $ionice Set CFQ ionice priority.
         * @param int $lockwait Maximal time to wait for the global lock (minutes).
         * @param string $mailnotification Specify when to send an email
         *   Enum: always,failure
         * @param string $mailto Comma-separated list of email addresses or users that should receive email notifications.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per guest system.
         * @param string $mode Backup mode.
         *   Enum: snapshot,suspend,stop
         * @param string $node Only run if executed on this node.
         * @param int $pigz Use pigz instead of gzip when N&amp;gt;0. N=1 uses half of cores, N&amp;gt;1 uses N as thread count.
         * @param string $pool Backup all known guest systems included in the specified pool.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param bool $quiet Be quiet.
         * @param bool $remove Prune older backups according to 'prune-backups'.
         * @param string $script Use specified hook script.
         * @param bool $stdexcludes Exclude temporary files and logs.
         * @param bool $stop Stop running backup jobs on this host.
         * @param int $stopwait Maximal time to wait until a guest system is stopped (minutes).
         * @param string $storage Store resulting file to this storage.
         * @param string $tmpdir Store temporary files to specified directory.
         * @param string $vmid The ID of the guest system you want to backup.
         * @param int $zstd Zstd threads. N=0 uses half of the available cores, N&amp;gt;0 uses N as thread count.
         * @return Result
         */
        public function setRest($starttime, $all = null, $bwlimit = null, $compress = null, $delete = null, $dow = null, $dumpdir = null, $enabled = null, $exclude = null, $exclude_path = null, $ionice = null, $lockwait = null, $mailnotification = null, $mailto = null, $maxfiles = null, $mode = null, $node = null, $pigz = null, $pool = null, $prune_backups = null, $quiet = null, $remove = null, $script = null, $stdexcludes = null, $stop = null, $stopwait = null, $storage = null, $tmpdir = null, $vmid = null, $zstd = null) {
            $params = ['starttime' => $starttime,
                'all' => $all,
                'bwlimit' => $bwlimit,
                'compress' => $compress,
                'delete' => $delete,
                'dow' => $dow,
                'dumpdir' => $dumpdir,
                'enabled' => $enabled,
                'exclude' => $exclude,
                'exclude-path' => $exclude_path,
                'ionice' => $ionice,
                'lockwait' => $lockwait,
                'mailnotification' => $mailnotification,
                'mailto' => $mailto,
                'maxfiles' => $maxfiles,
                'mode' => $mode,
                'node' => $node,
                'pigz' => $pigz,
                'pool' => $pool,
                'prune-backups' => $prune_backups,
                'quiet' => $quiet,
                'remove' => $remove,
                'script' => $script,
                'stdexcludes' => $stdexcludes,
                'stop' => $stop,
                'stopwait' => $stopwait,
                'storage' => $storage,
                'tmpdir' => $tmpdir,
                'vmid' => $vmid,
                'zstd' => $zstd];
            return $this->client->set("/cluster/backup/{$this->id}", $params);
        }

        /**
         * Update vzdump backup job definition.
         * @param string $starttime Job Start time.
         * @param bool $all Backup all known guest systems on this host.
         * @param int $bwlimit Limit I/O bandwidth (KBytes per second).
         * @param string $compress Compress dump file.
         *   Enum: 0,1,gzip,lzo,zstd
         * @param string $delete A list of settings you want to delete.
         * @param string $dow Day of week selection.
         * @param string $dumpdir Store resulting files to specified directory.
         * @param bool $enabled Enable or disable the job.
         * @param string $exclude Exclude specified guest systems (assumes --all)
         * @param string $exclude_path Exclude certain files/directories (shell globs). Paths starting with '/' are anchored to the container's root,  other paths match relative to each subdirectory.
         * @param int $ionice Set CFQ ionice priority.
         * @param int $lockwait Maximal time to wait for the global lock (minutes).
         * @param string $mailnotification Specify when to send an email
         *   Enum: always,failure
         * @param string $mailto Comma-separated list of email addresses or users that should receive email notifications.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per guest system.
         * @param string $mode Backup mode.
         *   Enum: snapshot,suspend,stop
         * @param string $node Only run if executed on this node.
         * @param int $pigz Use pigz instead of gzip when N&amp;gt;0. N=1 uses half of cores, N&amp;gt;1 uses N as thread count.
         * @param string $pool Backup all known guest systems included in the specified pool.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param bool $quiet Be quiet.
         * @param bool $remove Prune older backups according to 'prune-backups'.
         * @param string $script Use specified hook script.
         * @param bool $stdexcludes Exclude temporary files and logs.
         * @param bool $stop Stop running backup jobs on this host.
         * @param int $stopwait Maximal time to wait until a guest system is stopped (minutes).
         * @param string $storage Store resulting file to this storage.
         * @param string $tmpdir Store temporary files to specified directory.
         * @param string $vmid The ID of the guest system you want to backup.
         * @param int $zstd Zstd threads. N=0 uses half of the available cores, N&amp;gt;0 uses N as thread count.
         * @return Result
         */
        public function updateJob($starttime, $all = null, $bwlimit = null, $compress = null, $delete = null, $dow = null, $dumpdir = null, $enabled = null, $exclude = null, $exclude_path = null, $ionice = null, $lockwait = null, $mailnotification = null, $mailto = null, $maxfiles = null, $mode = null, $node = null, $pigz = null, $pool = null, $prune_backups = null, $quiet = null, $remove = null, $script = null, $stdexcludes = null, $stop = null, $stopwait = null, $storage = null, $tmpdir = null, $vmid = null, $zstd = null) {
            return $this->setRest($starttime, $all, $bwlimit, $compress, $delete, $dow, $dumpdir, $enabled, $exclude, $exclude_path, $ionice, $lockwait, $mailnotification, $mailto, $maxfiles, $mode, $node, $pigz, $pool, $prune_backups, $quiet, $remove, $script, $stdexcludes, $stop, $stopwait, $storage, $tmpdir, $vmid, $zstd);
        }

    }

    /**
     * Class PVEIdBackupClusterIncludedVolumes
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEIdBackupClusterIncludedVolumes {

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $id) {
            $this->client = $client;
            $this->id = $id;
        }

        /**
         * Returns included guests and the backup status of their disks. Optimized to be used in ExtJS tree views.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/backup/{$this->id}/included_volumes");
        }

        /**
         * Returns included guests and the backup status of their disks. Optimized to be used in ExtJS tree views.
         * @return Result
         */
        public function getVolumeBackupIncluded() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEClusterBackup_Info
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterBackup_Info {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $not_Backed_Up;

        /**
         * Get Backup_InfoClusterNot_Backed_Up
         * @return PVEBackup_InfoClusterNot_Backed_Up
         */
        public function getNot_Backed_Up() {
            return $this->not_Backed_Up ?: ($this->not_Backed_Up = new PVEBackup_InfoClusterNot_Backed_Up($this->client));
        }

        /**
         * Index for backup info related endpoints
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/backup-info");
        }

        /**
         * Index for backup info related endpoints
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEBackup_InfoClusterNot_Backed_Up
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEBackup_InfoClusterNot_Backed_Up {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Shows all guests which are not covered by any backup job.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/backup-info/not-backed-up");
        }

        /**
         * Shows all guests which are not covered by any backup job.
         * @return Result
         */
        public function getGuestsNotInBackup() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEClusterHa
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterHa {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $resources;

        /**
         * Get HaClusterResources
         * @return PVEHaClusterResources
         */
        public function getResources() {
            return $this->resources ?: ($this->resources = new PVEHaClusterResources($this->client));
        }

        /**
         * @ignore
         */
        private $groups;

        /**
         * Get HaClusterGroups
         * @return PVEHaClusterGroups
         */
        public function getGroups() {
            return $this->groups ?: ($this->groups = new PVEHaClusterGroups($this->client));
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get HaClusterStatus
         * @return PVEHaClusterStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVEHaClusterStatus($this->client));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ha");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEHaClusterResources
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEHaClusterResources {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemResourcesHaClusterSid
         * @param sid
         * @return PVEItemResourcesHaClusterSid
         */
        public function get($sid) {
            return new PVEItemResourcesHaClusterSid($this->client, $sid);
        }

        /**
         * List HA resources.
         * @param string $type Only list resources of specific type
         *   Enum: ct,vm
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/cluster/ha/resources", $params);
        }

        /**
         * List HA resources.
         * @param string $type Only list resources of specific type
         *   Enum: ct,vm
         * @return Result
         */
        public function index($type = null) {
            return $this->getRest($type);
        }

        /**
         * Create a new HA resource.
         * @param string $sid HA resource ID. This consists of a resource type followed by a resource specific name, separated with colon (example: vm:100 / ct:100). For virtual machines and containers, you can simply use the VM or CT id as a shortcut (example: 100).
         * @param string $comment Description.
         * @param string $group The HA group identifier.
         * @param int $max_relocate Maximal number of service relocate tries when a service failes to start.
         * @param int $max_restart Maximal number of tries to restart the service on a node after its start failed.
         * @param string $state Requested resource state.
         *   Enum: started,stopped,enabled,disabled,ignored
         * @param string $type Resource type.
         *   Enum: ct,vm
         * @return Result
         */
        public function createRest($sid, $comment = null, $group = null, $max_relocate = null, $max_restart = null, $state = null, $type = null) {
            $params = ['sid' => $sid,
                'comment' => $comment,
                'group' => $group,
                'max_relocate' => $max_relocate,
                'max_restart' => $max_restart,
                'state' => $state,
                'type' => $type];
            return $this->client->create("/cluster/ha/resources", $params);
        }

        /**
         * Create a new HA resource.
         * @param string $sid HA resource ID. This consists of a resource type followed by a resource specific name, separated with colon (example: vm:100 / ct:100). For virtual machines and containers, you can simply use the VM or CT id as a shortcut (example: 100).
         * @param string $comment Description.
         * @param string $group The HA group identifier.
         * @param int $max_relocate Maximal number of service relocate tries when a service failes to start.
         * @param int $max_restart Maximal number of tries to restart the service on a node after its start failed.
         * @param string $state Requested resource state.
         *   Enum: started,stopped,enabled,disabled,ignored
         * @param string $type Resource type.
         *   Enum: ct,vm
         * @return Result
         */
        public function create($sid, $comment = null, $group = null, $max_relocate = null, $max_restart = null, $state = null, $type = null) {
            return $this->createRest($sid, $comment, $group, $max_relocate, $max_restart, $state, $type);
        }

    }

    /**
     * Class PVEItemResourcesHaClusterSid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemResourcesHaClusterSid {

        /**
         * @ignore
         */
        private $sid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $sid) {
            $this->client = $client;
            $this->sid = $sid;
        }

        /**
         * @ignore
         */
        private $migrate;

        /**
         * Get SidResourcesHaClusterMigrate
         * @return PVESidResourcesHaClusterMigrate
         */
        public function getMigrate() {
            return $this->migrate ?: ($this->migrate = new PVESidResourcesHaClusterMigrate($this->client, $this->sid));
        }

        /**
         * @ignore
         */
        private $relocate;

        /**
         * Get SidResourcesHaClusterRelocate
         * @return PVESidResourcesHaClusterRelocate
         */
        public function getRelocate() {
            return $this->relocate ?: ($this->relocate = new PVESidResourcesHaClusterRelocate($this->client, $this->sid));
        }

        /**
         * Delete resource configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/ha/resources/{$this->sid}");
        }

        /**
         * Delete resource configuration.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read resource configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ha/resources/{$this->sid}");
        }

        /**
         * Read resource configuration.
         * @return Result
         */
        public function read() {
            return $this->getRest();
        }

        /**
         * Update resource configuration.
         * @param string $comment Description.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $group The HA group identifier.
         * @param int $max_relocate Maximal number of service relocate tries when a service failes to start.
         * @param int $max_restart Maximal number of tries to restart the service on a node after its start failed.
         * @param string $state Requested resource state.
         *   Enum: started,stopped,enabled,disabled,ignored
         * @return Result
         */
        public function setRest($comment = null, $delete = null, $digest = null, $group = null, $max_relocate = null, $max_restart = null, $state = null) {
            $params = ['comment' => $comment,
                'delete' => $delete,
                'digest' => $digest,
                'group' => $group,
                'max_relocate' => $max_relocate,
                'max_restart' => $max_restart,
                'state' => $state];
            return $this->client->set("/cluster/ha/resources/{$this->sid}", $params);
        }

        /**
         * Update resource configuration.
         * @param string $comment Description.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $group The HA group identifier.
         * @param int $max_relocate Maximal number of service relocate tries when a service failes to start.
         * @param int $max_restart Maximal number of tries to restart the service on a node after its start failed.
         * @param string $state Requested resource state.
         *   Enum: started,stopped,enabled,disabled,ignored
         * @return Result
         */
        public function update($comment = null, $delete = null, $digest = null, $group = null, $max_relocate = null, $max_restart = null, $state = null) {
            return $this->setRest($comment, $delete, $digest, $group, $max_relocate, $max_restart, $state);
        }

    }

    /**
     * Class PVESidResourcesHaClusterMigrate
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESidResourcesHaClusterMigrate {

        /**
         * @ignore
         */
        private $sid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $sid) {
            $this->client = $client;
            $this->sid = $sid;
        }

        /**
         * Request resource migration (online) to another node.
         * @param string $node Target node.
         * @return Result
         */
        public function createRest($node) {
            $params = ['node' => $node];
            return $this->client->create("/cluster/ha/resources/{$this->sid}/migrate", $params);
        }

        /**
         * Request resource migration (online) to another node.
         * @param string $node Target node.
         * @return Result
         */
        public function migrate($node) {
            return $this->createRest($node);
        }

    }

    /**
     * Class PVESidResourcesHaClusterRelocate
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESidResourcesHaClusterRelocate {

        /**
         * @ignore
         */
        private $sid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $sid) {
            $this->client = $client;
            $this->sid = $sid;
        }

        /**
         * Request resource relocatzion to another node. This stops the service on the old node, and restarts it on the target node.
         * @param string $node Target node.
         * @return Result
         */
        public function createRest($node) {
            $params = ['node' => $node];
            return $this->client->create("/cluster/ha/resources/{$this->sid}/relocate", $params);
        }

        /**
         * Request resource relocatzion to another node. This stops the service on the old node, and restarts it on the target node.
         * @param string $node Target node.
         * @return Result
         */
        public function relocate($node) {
            return $this->createRest($node);
        }

    }

    /**
     * Class PVEHaClusterGroups
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEHaClusterGroups {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemGroupsHaClusterGroup
         * @param group
         * @return PVEItemGroupsHaClusterGroup
         */
        public function get($group) {
            return new PVEItemGroupsHaClusterGroup($this->client, $group);
        }

        /**
         * Get HA groups.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ha/groups");
        }

        /**
         * Get HA groups.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create a new HA group.
         * @param string $group The HA group identifier.
         * @param string $nodes List of cluster node names with optional priority.
         * @param string $comment Description.
         * @param bool $nofailback The CRM tries to run services on the node with the highest priority. If a node with higher priority comes online, the CRM migrates the service to that node. Enabling nofailback prevents that behavior.
         * @param bool $restricted Resources bound to restricted groups may only run on nodes defined by the group.
         * @param string $type Group type.
         *   Enum: group
         * @return Result
         */
        public function createRest($group, $nodes, $comment = null, $nofailback = null, $restricted = null, $type = null) {
            $params = ['group' => $group,
                'nodes' => $nodes,
                'comment' => $comment,
                'nofailback' => $nofailback,
                'restricted' => $restricted,
                'type' => $type];
            return $this->client->create("/cluster/ha/groups", $params);
        }

        /**
         * Create a new HA group.
         * @param string $group The HA group identifier.
         * @param string $nodes List of cluster node names with optional priority.
         * @param string $comment Description.
         * @param bool $nofailback The CRM tries to run services on the node with the highest priority. If a node with higher priority comes online, the CRM migrates the service to that node. Enabling nofailback prevents that behavior.
         * @param bool $restricted Resources bound to restricted groups may only run on nodes defined by the group.
         * @param string $type Group type.
         *   Enum: group
         * @return Result
         */
        public function create($group, $nodes, $comment = null, $nofailback = null, $restricted = null, $type = null) {
            return $this->createRest($group, $nodes, $comment, $nofailback, $restricted, $type);
        }

    }

    /**
     * Class PVEItemGroupsHaClusterGroup
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemGroupsHaClusterGroup {

        /**
         * @ignore
         */
        private $group;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $group) {
            $this->client = $client;
            $this->group = $group;
        }

        /**
         * Delete ha group configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/ha/groups/{$this->group}");
        }

        /**
         * Delete ha group configuration.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read ha group configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ha/groups/{$this->group}");
        }

        /**
         * Read ha group configuration.
         * @return Result
         */
        public function read() {
            return $this->getRest();
        }

        /**
         * Update ha group configuration.
         * @param string $comment Description.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $nodes List of cluster node names with optional priority.
         * @param bool $nofailback The CRM tries to run services on the node with the highest priority. If a node with higher priority comes online, the CRM migrates the service to that node. Enabling nofailback prevents that behavior.
         * @param bool $restricted Resources bound to restricted groups may only run on nodes defined by the group.
         * @return Result
         */
        public function setRest($comment = null, $delete = null, $digest = null, $nodes = null, $nofailback = null, $restricted = null) {
            $params = ['comment' => $comment,
                'delete' => $delete,
                'digest' => $digest,
                'nodes' => $nodes,
                'nofailback' => $nofailback,
                'restricted' => $restricted];
            return $this->client->set("/cluster/ha/groups/{$this->group}", $params);
        }

        /**
         * Update ha group configuration.
         * @param string $comment Description.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $nodes List of cluster node names with optional priority.
         * @param bool $nofailback The CRM tries to run services on the node with the highest priority. If a node with higher priority comes online, the CRM migrates the service to that node. Enabling nofailback prevents that behavior.
         * @param bool $restricted Resources bound to restricted groups may only run on nodes defined by the group.
         * @return Result
         */
        public function update($comment = null, $delete = null, $digest = null, $nodes = null, $nofailback = null, $restricted = null) {
            return $this->setRest($comment, $delete, $digest, $nodes, $nofailback, $restricted);
        }

    }

    /**
     * Class PVEHaClusterStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEHaClusterStatus {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $current;

        /**
         * Get StatusHaClusterCurrent
         * @return PVEStatusHaClusterCurrent
         */
        public function getCurrent() {
            return $this->current ?: ($this->current = new PVEStatusHaClusterCurrent($this->client));
        }

        /**
         * @ignore
         */
        private $managerStatus;

        /**
         * Get StatusHaClusterManagerStatus
         * @return PVEStatusHaClusterManagerStatus
         */
        public function getManagerStatus() {
            return $this->managerStatus ?: ($this->managerStatus = new PVEStatusHaClusterManagerStatus($this->client));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ha/status");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEStatusHaClusterCurrent
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusHaClusterCurrent {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get HA manger status.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ha/status/current");
        }

        /**
         * Get HA manger status.
         * @return Result
         */
        public function status() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEStatusHaClusterManagerStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusHaClusterManagerStatus {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get full HA manger status, including LRM status.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ha/status/manager_status");
        }

        /**
         * Get full HA manger status, including LRM status.
         * @return Result
         */
        public function managerStatus() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEClusterAcme
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterAcme {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $plugins;

        /**
         * Get AcmeClusterPlugins
         * @return PVEAcmeClusterPlugins
         */
        public function getPlugins() {
            return $this->plugins ?: ($this->plugins = new PVEAcmeClusterPlugins($this->client));
        }

        /**
         * @ignore
         */
        private $account;

        /**
         * Get AcmeClusterAccount
         * @return PVEAcmeClusterAccount
         */
        public function getAccount() {
            return $this->account ?: ($this->account = new PVEAcmeClusterAccount($this->client));
        }

        /**
         * @ignore
         */
        private $tos;

        /**
         * Get AcmeClusterTos
         * @return PVEAcmeClusterTos
         */
        public function getTos() {
            return $this->tos ?: ($this->tos = new PVEAcmeClusterTos($this->client));
        }

        /**
         * @ignore
         */
        private $directories;

        /**
         * Get AcmeClusterDirectories
         * @return PVEAcmeClusterDirectories
         */
        public function getDirectories() {
            return $this->directories ?: ($this->directories = new PVEAcmeClusterDirectories($this->client));
        }

        /**
         * @ignore
         */
        private $challenge_Schema;

        /**
         * Get AcmeClusterChallenge_Schema
         * @return PVEAcmeClusterChallenge_Schema
         */
        public function getChallenge_Schema() {
            return $this->challenge_Schema ?: ($this->challenge_Schema = new PVEAcmeClusterChallenge_Schema($this->client));
        }

        /**
         * ACMEAccount index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/acme");
        }

        /**
         * ACMEAccount index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAcmeClusterPlugins
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAcmeClusterPlugins {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemPluginsAcmeClusterId
         * @param id
         * @return PVEItemPluginsAcmeClusterId
         */
        public function get($id) {
            return new PVEItemPluginsAcmeClusterId($this->client, $id);
        }

        /**
         * ACME plugin index.
         * @param string $type Only list ACME plugins of a specific type
         *   Enum: dns,standalone
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/cluster/acme/plugins", $params);
        }

        /**
         * ACME plugin index.
         * @param string $type Only list ACME plugins of a specific type
         *   Enum: dns,standalone
         * @return Result
         */
        public function index($type = null) {
            return $this->getRest($type);
        }

        /**
         * Add ACME plugin configuration.
         * @param string $id ACME Plugin ID name
         * @param string $type ACME challenge type.
         *   Enum: dns,standalone
         * @param string $api API plugin name
         *   Enum: 1984hosting,acmedns,acmeproxy,active24,ad,ali,anx,arvan,aurora,autodns,aws,azure,cf,clouddns,cloudns,cn,conoha,constellix,cx,cyon,da,ddnss,desec,df,dgon,dnsimple,do,doapi,domeneshop,dp,dpi,dreamhost,duckdns,durabledns,dyn,dynu,dynv6,easydns,edgedns,euserv,exoscale,freedns,gandi_livedns,gcloud,gd,gdnsdk,he,hetzner,hexonet,hostingde,huaweicloud,infoblox,infomaniak,internetbs,inwx,ionos,ispconfig,jd,joker,kappernet,kas,kinghost,knot,leaseweb,lexicon,linode,linode_v4,loopia,lua,maradns,me,miab,misaka,myapi,mydevil,mydnsjp,namecheap,namecom,namesilo,nederhost,neodigit,netcup,netlify,nic,njalla,nm,nsd,nsone,nsupdate,nw,one,online,openprovider,openstack,opnsense,ovh,pdns,pleskxml,pointhq,porkbun,rackcorp,rackspace,rcode0,regru,scaleway,schlundtech,selectel,servercow,simply,tele3,transip,ultra,unoeuro,variomedia,vscale,vultr,websupport,world4you,yandex,zilore,zone,zonomi
         * @param string $data DNS plugin data. (base64 encoded)
         * @param bool $disable Flag to disable the config.
         * @param string $nodes List of cluster node names.
         * @param int $validation_delay Extra delay in seconds to wait before requesting validation. Allows to cope with a long TTL of DNS records.
         * @return Result
         */
        public function createRest($id, $type, $api = null, $data = null, $disable = null, $nodes = null, $validation_delay = null) {
            $params = ['id' => $id,
                'type' => $type,
                'api' => $api,
                'data' => $data,
                'disable' => $disable,
                'nodes' => $nodes,
                'validation-delay' => $validation_delay];
            return $this->client->create("/cluster/acme/plugins", $params);
        }

        /**
         * Add ACME plugin configuration.
         * @param string $id ACME Plugin ID name
         * @param string $type ACME challenge type.
         *   Enum: dns,standalone
         * @param string $api API plugin name
         *   Enum: 1984hosting,acmedns,acmeproxy,active24,ad,ali,anx,arvan,aurora,autodns,aws,azure,cf,clouddns,cloudns,cn,conoha,constellix,cx,cyon,da,ddnss,desec,df,dgon,dnsimple,do,doapi,domeneshop,dp,dpi,dreamhost,duckdns,durabledns,dyn,dynu,dynv6,easydns,edgedns,euserv,exoscale,freedns,gandi_livedns,gcloud,gd,gdnsdk,he,hetzner,hexonet,hostingde,huaweicloud,infoblox,infomaniak,internetbs,inwx,ionos,ispconfig,jd,joker,kappernet,kas,kinghost,knot,leaseweb,lexicon,linode,linode_v4,loopia,lua,maradns,me,miab,misaka,myapi,mydevil,mydnsjp,namecheap,namecom,namesilo,nederhost,neodigit,netcup,netlify,nic,njalla,nm,nsd,nsone,nsupdate,nw,one,online,openprovider,openstack,opnsense,ovh,pdns,pleskxml,pointhq,porkbun,rackcorp,rackspace,rcode0,regru,scaleway,schlundtech,selectel,servercow,simply,tele3,transip,ultra,unoeuro,variomedia,vscale,vultr,websupport,world4you,yandex,zilore,zone,zonomi
         * @param string $data DNS plugin data. (base64 encoded)
         * @param bool $disable Flag to disable the config.
         * @param string $nodes List of cluster node names.
         * @param int $validation_delay Extra delay in seconds to wait before requesting validation. Allows to cope with a long TTL of DNS records.
         * @return Result
         */
        public function addPlugin($id, $type, $api = null, $data = null, $disable = null, $nodes = null, $validation_delay = null) {
            return $this->createRest($id, $type, $api, $data, $disable, $nodes, $validation_delay);
        }

    }

    /**
     * Class PVEItemPluginsAcmeClusterId
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemPluginsAcmeClusterId {

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $id) {
            $this->client = $client;
            $this->id = $id;
        }

        /**
         * Delete ACME plugin configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/acme/plugins/{$this->id}");
        }

        /**
         * Delete ACME plugin configuration.
         * @return Result
         */
        public function deletePlugin() {
            return $this->deleteRest();
        }

        /**
         * Get ACME plugin configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/acme/plugins/{$this->id}");
        }

        /**
         * Get ACME plugin configuration.
         * @return Result
         */
        public function getPluginConfig() {
            return $this->getRest();
        }

        /**
         * Update ACME plugin configuration.
         * @param string $api API plugin name
         *   Enum: 1984hosting,acmedns,acmeproxy,active24,ad,ali,anx,arvan,aurora,autodns,aws,azure,cf,clouddns,cloudns,cn,conoha,constellix,cx,cyon,da,ddnss,desec,df,dgon,dnsimple,do,doapi,domeneshop,dp,dpi,dreamhost,duckdns,durabledns,dyn,dynu,dynv6,easydns,edgedns,euserv,exoscale,freedns,gandi_livedns,gcloud,gd,gdnsdk,he,hetzner,hexonet,hostingde,huaweicloud,infoblox,infomaniak,internetbs,inwx,ionos,ispconfig,jd,joker,kappernet,kas,kinghost,knot,leaseweb,lexicon,linode,linode_v4,loopia,lua,maradns,me,miab,misaka,myapi,mydevil,mydnsjp,namecheap,namecom,namesilo,nederhost,neodigit,netcup,netlify,nic,njalla,nm,nsd,nsone,nsupdate,nw,one,online,openprovider,openstack,opnsense,ovh,pdns,pleskxml,pointhq,porkbun,rackcorp,rackspace,rcode0,regru,scaleway,schlundtech,selectel,servercow,simply,tele3,transip,ultra,unoeuro,variomedia,vscale,vultr,websupport,world4you,yandex,zilore,zone,zonomi
         * @param string $data DNS plugin data. (base64 encoded)
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $disable Flag to disable the config.
         * @param string $nodes List of cluster node names.
         * @param int $validation_delay Extra delay in seconds to wait before requesting validation. Allows to cope with a long TTL of DNS records.
         * @return Result
         */
        public function setRest($api = null, $data = null, $delete = null, $digest = null, $disable = null, $nodes = null, $validation_delay = null) {
            $params = ['api' => $api,
                'data' => $data,
                'delete' => $delete,
                'digest' => $digest,
                'disable' => $disable,
                'nodes' => $nodes,
                'validation-delay' => $validation_delay];
            return $this->client->set("/cluster/acme/plugins/{$this->id}", $params);
        }

        /**
         * Update ACME plugin configuration.
         * @param string $api API plugin name
         *   Enum: 1984hosting,acmedns,acmeproxy,active24,ad,ali,anx,arvan,aurora,autodns,aws,azure,cf,clouddns,cloudns,cn,conoha,constellix,cx,cyon,da,ddnss,desec,df,dgon,dnsimple,do,doapi,domeneshop,dp,dpi,dreamhost,duckdns,durabledns,dyn,dynu,dynv6,easydns,edgedns,euserv,exoscale,freedns,gandi_livedns,gcloud,gd,gdnsdk,he,hetzner,hexonet,hostingde,huaweicloud,infoblox,infomaniak,internetbs,inwx,ionos,ispconfig,jd,joker,kappernet,kas,kinghost,knot,leaseweb,lexicon,linode,linode_v4,loopia,lua,maradns,me,miab,misaka,myapi,mydevil,mydnsjp,namecheap,namecom,namesilo,nederhost,neodigit,netcup,netlify,nic,njalla,nm,nsd,nsone,nsupdate,nw,one,online,openprovider,openstack,opnsense,ovh,pdns,pleskxml,pointhq,porkbun,rackcorp,rackspace,rcode0,regru,scaleway,schlundtech,selectel,servercow,simply,tele3,transip,ultra,unoeuro,variomedia,vscale,vultr,websupport,world4you,yandex,zilore,zone,zonomi
         * @param string $data DNS plugin data. (base64 encoded)
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $disable Flag to disable the config.
         * @param string $nodes List of cluster node names.
         * @param int $validation_delay Extra delay in seconds to wait before requesting validation. Allows to cope with a long TTL of DNS records.
         * @return Result
         */
        public function updatePlugin($api = null, $data = null, $delete = null, $digest = null, $disable = null, $nodes = null, $validation_delay = null) {
            return $this->setRest($api, $data, $delete, $digest, $disable, $nodes, $validation_delay);
        }

    }

    /**
     * Class PVEAcmeClusterAccount
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAcmeClusterAccount {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemAccountAcmeClusterName
         * @param name
         * @return PVEItemAccountAcmeClusterName
         */
        public function get($name) {
            return new PVEItemAccountAcmeClusterName($this->client, $name);
        }

        /**
         * ACMEAccount index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/acme/account");
        }

        /**
         * ACMEAccount index.
         * @return Result
         */
        public function accountIndex() {
            return $this->getRest();
        }

        /**
         * Register a new ACME account with CA.
         * @param string $contact Contact email addresses.
         * @param string $directory URL of ACME CA directory endpoint.
         * @param string $name ACME account config file name.
         * @param string $tos_url URL of CA TermsOfService - setting this indicates agreement.
         * @return Result
         */
        public function createRest($contact, $directory = null, $name = null, $tos_url = null) {
            $params = ['contact' => $contact,
                'directory' => $directory,
                'name' => $name,
                'tos_url' => $tos_url];
            return $this->client->create("/cluster/acme/account", $params);
        }

        /**
         * Register a new ACME account with CA.
         * @param string $contact Contact email addresses.
         * @param string $directory URL of ACME CA directory endpoint.
         * @param string $name ACME account config file name.
         * @param string $tos_url URL of CA TermsOfService - setting this indicates agreement.
         * @return Result
         */
        public function registerAccount($contact, $directory = null, $name = null, $tos_url = null) {
            return $this->createRest($contact, $directory, $name, $tos_url);
        }

    }

    /**
     * Class PVEItemAccountAcmeClusterName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemAccountAcmeClusterName {

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $name) {
            $this->client = $client;
            $this->name = $name;
        }

        /**
         * Deactivate existing ACME account at CA.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/acme/account/{$this->name}");
        }

        /**
         * Deactivate existing ACME account at CA.
         * @return Result
         */
        public function deactivateAccount() {
            return $this->deleteRest();
        }

        /**
         * Return existing ACME account information.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/acme/account/{$this->name}");
        }

        /**
         * Return existing ACME account information.
         * @return Result
         */
        public function getAccount() {
            return $this->getRest();
        }

        /**
         * Update existing ACME account information with CA. Note: not specifying any new account information triggers a refresh.
         * @param string $contact Contact email addresses.
         * @return Result
         */
        public function setRest($contact = null) {
            $params = ['contact' => $contact];
            return $this->client->set("/cluster/acme/account/{$this->name}", $params);
        }

        /**
         * Update existing ACME account information with CA. Note: not specifying any new account information triggers a refresh.
         * @param string $contact Contact email addresses.
         * @return Result
         */
        public function updateAccount($contact = null) {
            return $this->setRest($contact);
        }

    }

    /**
     * Class PVEAcmeClusterTos
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAcmeClusterTos {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Retrieve ACME TermsOfService URL from CA.
         * @param string $directory URL of ACME CA directory endpoint.
         * @return Result
         */
        public function getRest($directory = null) {
            $params = ['directory' => $directory];
            return $this->client->get("/cluster/acme/tos", $params);
        }

        /**
         * Retrieve ACME TermsOfService URL from CA.
         * @param string $directory URL of ACME CA directory endpoint.
         * @return Result
         */
        public function getTos($directory = null) {
            return $this->getRest($directory);
        }

    }

    /**
     * Class PVEAcmeClusterDirectories
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAcmeClusterDirectories {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get named known ACME directory endpoints.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/acme/directories");
        }

        /**
         * Get named known ACME directory endpoints.
         * @return Result
         */
        public function getDirectories() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAcmeClusterChallenge_Schema
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAcmeClusterChallenge_Schema {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get schema of ACME challenge types.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/acme/challenge-schema");
        }

        /**
         * Get schema of ACME challenge types.
         * @return Result
         */
        public function challengeschema() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEClusterCeph
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterCeph {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $metadata;

        /**
         * Get CephClusterMetadata
         * @return PVECephClusterMetadata
         */
        public function getMetadata() {
            return $this->metadata ?: ($this->metadata = new PVECephClusterMetadata($this->client));
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get CephClusterStatus
         * @return PVECephClusterStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVECephClusterStatus($this->client));
        }

        /**
         * @ignore
         */
        private $flags;

        /**
         * Get CephClusterFlags
         * @return PVECephClusterFlags
         */
        public function getFlags() {
            return $this->flags ?: ($this->flags = new PVECephClusterFlags($this->client));
        }

        /**
         * Cluster ceph index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ceph");
        }

        /**
         * Cluster ceph index.
         * @return Result
         */
        public function cephindex() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECephClusterMetadata
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephClusterMetadata {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ceph metadata.
         * @param string $scope 
         *   Enum: all,versions
         * @return Result
         */
        public function getRest($scope = null) {
            $params = ['scope' => $scope];
            return $this->client->get("/cluster/ceph/metadata", $params);
        }

        /**
         * Get ceph metadata.
         * @param string $scope 
         *   Enum: all,versions
         * @return Result
         */
        public function metadata($scope = null) {
            return $this->getRest($scope);
        }

    }

    /**
     * Class PVECephClusterStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephClusterStatus {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ceph status.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ceph/status");
        }

        /**
         * Get ceph status.
         * @return Result
         */
        public function status() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECephClusterFlags
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephClusterFlags {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemFlagsCephClusterFlag
         * @param flag
         * @return PVEItemFlagsCephClusterFlag
         */
        public function get($flag) {
            return new PVEItemFlagsCephClusterFlag($this->client, $flag);
        }

        /**
         * get the status of all ceph flags
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ceph/flags");
        }

        /**
         * get the status of all ceph flags
         * @return Result
         */
        public function getAllFlags() {
            return $this->getRest();
        }

        /**
         * Set/Unset multiple ceph flags at once.
         * @param bool $nobackfill Backfilling of PGs is suspended.
         * @param bool $nodeep_scrub Deep Scrubbing is disabled.
         * @param bool $nodown OSD failure reports are being ignored, such that the monitors will not mark OSDs down.
         * @param bool $noin OSDs that were previously marked out will not be marked back in when they start.
         * @param bool $noout OSDs will not automatically be marked out after the configured interval.
         * @param bool $norebalance Rebalancing of PGs is suspended.
         * @param bool $norecover Recovery of PGs is suspended.
         * @param bool $noscrub Scrubbing is disabled.
         * @param bool $notieragent Cache tiering activity is suspended.
         * @param bool $noup OSDs are not allowed to start.
         * @param bool $pause Pauses read and writes.
         * @return Result
         */
        public function setRest($nobackfill = null, $nodeep_scrub = null, $nodown = null, $noin = null, $noout = null, $norebalance = null, $norecover = null, $noscrub = null, $notieragent = null, $noup = null, $pause = null) {
            $params = ['nobackfill' => $nobackfill,
                'nodeep-scrub' => $nodeep_scrub,
                'nodown' => $nodown,
                'noin' => $noin,
                'noout' => $noout,
                'norebalance' => $norebalance,
                'norecover' => $norecover,
                'noscrub' => $noscrub,
                'notieragent' => $notieragent,
                'noup' => $noup,
                'pause' => $pause];
            return $this->client->set("/cluster/ceph/flags", $params);
        }

        /**
         * Set/Unset multiple ceph flags at once.
         * @param bool $nobackfill Backfilling of PGs is suspended.
         * @param bool $nodeep_scrub Deep Scrubbing is disabled.
         * @param bool $nodown OSD failure reports are being ignored, such that the monitors will not mark OSDs down.
         * @param bool $noin OSDs that were previously marked out will not be marked back in when they start.
         * @param bool $noout OSDs will not automatically be marked out after the configured interval.
         * @param bool $norebalance Rebalancing of PGs is suspended.
         * @param bool $norecover Recovery of PGs is suspended.
         * @param bool $noscrub Scrubbing is disabled.
         * @param bool $notieragent Cache tiering activity is suspended.
         * @param bool $noup OSDs are not allowed to start.
         * @param bool $pause Pauses read and writes.
         * @return Result
         */
        public function setFlags($nobackfill = null, $nodeep_scrub = null, $nodown = null, $noin = null, $noout = null, $norebalance = null, $norecover = null, $noscrub = null, $notieragent = null, $noup = null, $pause = null) {
            return $this->setRest($nobackfill, $nodeep_scrub, $nodown, $noin, $noout, $norebalance, $norecover, $noscrub, $notieragent, $noup, $pause);
        }

    }

    /**
     * Class PVEItemFlagsCephClusterFlag
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemFlagsCephClusterFlag {

        /**
         * @ignore
         */
        private $flag;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $flag) {
            $this->client = $client;
            $this->flag = $flag;
        }

        /**
         * Get the status of a specific ceph flag.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/ceph/flags/{$this->flag}");
        }

        /**
         * Get the status of a specific ceph flag.
         * @return Result
         */
        public function getFlag() {
            return $this->getRest();
        }

        /**
         * Set or clear (unset) a specific ceph flag
         * @param bool $value The new value of the flag
         * @return Result
         */
        public function setRest($value) {
            $params = ['value' => $value];
            return $this->client->set("/cluster/ceph/flags/{$this->flag}", $params);
        }

        /**
         * Set or clear (unset) a specific ceph flag
         * @param bool $value The new value of the flag
         * @return Result
         */
        public function updateFlag($value) {
            return $this->setRest($value);
        }

    }

    /**
     * Class PVEClusterSdn
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterSdn {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $vnets;

        /**
         * Get SdnClusterVnets
         * @return PVESdnClusterVnets
         */
        public function getVnets() {
            return $this->vnets ?: ($this->vnets = new PVESdnClusterVnets($this->client));
        }

        /**
         * @ignore
         */
        private $zones;

        /**
         * Get SdnClusterZones
         * @return PVESdnClusterZones
         */
        public function getZones() {
            return $this->zones ?: ($this->zones = new PVESdnClusterZones($this->client));
        }

        /**
         * @ignore
         */
        private $controllers;

        /**
         * Get SdnClusterControllers
         * @return PVESdnClusterControllers
         */
        public function getControllers() {
            return $this->controllers ?: ($this->controllers = new PVESdnClusterControllers($this->client));
        }

        /**
         * @ignore
         */
        private $ipams;

        /**
         * Get SdnClusterIpams
         * @return PVESdnClusterIpams
         */
        public function getIpams() {
            return $this->ipams ?: ($this->ipams = new PVESdnClusterIpams($this->client));
        }

        /**
         * @ignore
         */
        private $dns;

        /**
         * Get SdnClusterDns
         * @return PVESdnClusterDns
         */
        public function getDns() {
            return $this->dns ?: ($this->dns = new PVESdnClusterDns($this->client));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/sdn");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Apply sdn controller changes &amp;&amp; reload.
         * @return Result
         */
        public function setRest() {
            return $this->client->set("/cluster/sdn");
        }

        /**
         * Apply sdn controller changes &amp;&amp; reload.
         * @return Result
         */
        public function reload() {
            return $this->setRest();
        }

    }

    /**
     * Class PVESdnClusterVnets
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESdnClusterVnets {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemVnetsSdnClusterVnet
         * @param vnet
         * @return PVEItemVnetsSdnClusterVnet
         */
        public function get($vnet) {
            return new PVEItemVnetsSdnClusterVnet($this->client, $vnet);
        }

        /**
         * SDN vnets index.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function getRest($pending = null, $running = null) {
            $params = ['pending' => $pending,
                'running' => $running];
            return $this->client->get("/cluster/sdn/vnets", $params);
        }

        /**
         * SDN vnets index.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function index($pending = null, $running = null) {
            return $this->getRest($pending, $running);
        }

        /**
         * Create a new sdn vnet object.
         * @param string $vnet The SDN vnet object identifier.
         * @param string $zone zone id
         * @param string $alias alias name of the vnet
         * @param int $tag vlan or vxlan id
         * @param string $type Type
         *   Enum: vnet
         * @param bool $vlanaware Allow vm VLANs to pass through this vnet.
         * @return Result
         */
        public function createRest($vnet, $zone, $alias = null, $tag = null, $type = null, $vlanaware = null) {
            $params = ['vnet' => $vnet,
                'zone' => $zone,
                'alias' => $alias,
                'tag' => $tag,
                'type' => $type,
                'vlanaware' => $vlanaware];
            return $this->client->create("/cluster/sdn/vnets", $params);
        }

        /**
         * Create a new sdn vnet object.
         * @param string $vnet The SDN vnet object identifier.
         * @param string $zone zone id
         * @param string $alias alias name of the vnet
         * @param int $tag vlan or vxlan id
         * @param string $type Type
         *   Enum: vnet
         * @param bool $vlanaware Allow vm VLANs to pass through this vnet.
         * @return Result
         */
        public function create($vnet, $zone, $alias = null, $tag = null, $type = null, $vlanaware = null) {
            return $this->createRest($vnet, $zone, $alias, $tag, $type, $vlanaware);
        }

    }

    /**
     * Class PVEItemVnetsSdnClusterVnet
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemVnetsSdnClusterVnet {

        /**
         * @ignore
         */
        private $vnet;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $vnet) {
            $this->client = $client;
            $this->vnet = $vnet;
        }

        /**
         * @ignore
         */
        private $subnets;

        /**
         * Get VnetVnetsSdnClusterSubnets
         * @return PVEVnetVnetsSdnClusterSubnets
         */
        public function getSubnets() {
            return $this->subnets ?: ($this->subnets = new PVEVnetVnetsSdnClusterSubnets($this->client, $this->vnet));
        }

        /**
         * Delete sdn vnet object configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/sdn/vnets/{$this->vnet}");
        }

        /**
         * Delete sdn vnet object configuration.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read sdn vnet configuration.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function getRest($pending = null, $running = null) {
            $params = ['pending' => $pending,
                'running' => $running];
            return $this->client->get("/cluster/sdn/vnets/{$this->vnet}", $params);
        }

        /**
         * Read sdn vnet configuration.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function read($pending = null, $running = null) {
            return $this->getRest($pending, $running);
        }

        /**
         * Update sdn vnet object configuration.
         * @param string $alias alias name of the vnet
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param int $tag vlan or vxlan id
         * @param bool $vlanaware Allow vm VLANs to pass through this vnet.
         * @param string $zone zone id
         * @return Result
         */
        public function setRest($alias = null, $delete = null, $digest = null, $tag = null, $vlanaware = null, $zone = null) {
            $params = ['alias' => $alias,
                'delete' => $delete,
                'digest' => $digest,
                'tag' => $tag,
                'vlanaware' => $vlanaware,
                'zone' => $zone];
            return $this->client->set("/cluster/sdn/vnets/{$this->vnet}", $params);
        }

        /**
         * Update sdn vnet object configuration.
         * @param string $alias alias name of the vnet
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param int $tag vlan or vxlan id
         * @param bool $vlanaware Allow vm VLANs to pass through this vnet.
         * @param string $zone zone id
         * @return Result
         */
        public function update($alias = null, $delete = null, $digest = null, $tag = null, $vlanaware = null, $zone = null) {
            return $this->setRest($alias, $delete, $digest, $tag, $vlanaware, $zone);
        }

    }

    /**
     * Class PVEVnetVnetsSdnClusterSubnets
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVnetVnetsSdnClusterSubnets {

        /**
         * @ignore
         */
        private $vnet;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $vnet) {
            $this->client = $client;
            $this->vnet = $vnet;
        }

        /**
         * Get ItemSubnetsVnetVnetsSdnClusterSubnet
         * @param subnet
         * @return PVEItemSubnetsVnetVnetsSdnClusterSubnet
         */
        public function get($subnet) {
            return new PVEItemSubnetsVnetVnetsSdnClusterSubnet($this->client, $this->vnet, $subnet);
        }

        /**
         * SDN subnets index.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function getRest($pending = null, $running = null) {
            $params = ['pending' => $pending,
                'running' => $running];
            return $this->client->get("/cluster/sdn/vnets/{$this->vnet}/subnets", $params);
        }

        /**
         * SDN subnets index.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function index($pending = null, $running = null) {
            return $this->getRest($pending, $running);
        }

        /**
         * Create a new sdn subnet object.
         * @param string $subnet The SDN subnet object identifier.
         * @param string $type 
         *   Enum: subnet
         * @param string $dnszoneprefix dns domain zone prefix  ex: 'adm' -&amp;gt; &amp;lt;hostname&amp;gt;.adm.mydomain.com
         * @param string $gateway Subnet Gateway: Will be assign on vnet for layer3 zones
         * @param bool $snat enable masquerade for this subnet if pve-firewall
         * @return Result
         */
        public function createRest($subnet, $type, $dnszoneprefix = null, $gateway = null, $snat = null) {
            $params = ['subnet' => $subnet,
                'type' => $type,
                'dnszoneprefix' => $dnszoneprefix,
                'gateway' => $gateway,
                'snat' => $snat];
            return $this->client->create("/cluster/sdn/vnets/{$this->vnet}/subnets", $params);
        }

        /**
         * Create a new sdn subnet object.
         * @param string $subnet The SDN subnet object identifier.
         * @param string $type 
         *   Enum: subnet
         * @param string $dnszoneprefix dns domain zone prefix  ex: 'adm' -&amp;gt; &amp;lt;hostname&amp;gt;.adm.mydomain.com
         * @param string $gateway Subnet Gateway: Will be assign on vnet for layer3 zones
         * @param bool $snat enable masquerade for this subnet if pve-firewall
         * @return Result
         */
        public function create($subnet, $type, $dnszoneprefix = null, $gateway = null, $snat = null) {
            return $this->createRest($subnet, $type, $dnszoneprefix, $gateway, $snat);
        }

    }

    /**
     * Class PVEItemSubnetsVnetVnetsSdnClusterSubnet
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemSubnetsVnetVnetsSdnClusterSubnet {

        /**
         * @ignore
         */
        private $vnet;

        /**
         * @ignore
         */
        private $subnet;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $vnet, $subnet) {
            $this->client = $client;
            $this->vnet = $vnet;
            $this->subnet = $subnet;
        }

        /**
         * Delete sdn subnet object configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/sdn/vnets/{$this->vnet}/subnets/{$this->subnet}");
        }

        /**
         * Delete sdn subnet object configuration.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read sdn subnet configuration.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function getRest($pending = null, $running = null) {
            $params = ['pending' => $pending,
                'running' => $running];
            return $this->client->get("/cluster/sdn/vnets/{$this->vnet}/subnets/{$this->subnet}", $params);
        }

        /**
         * Read sdn subnet configuration.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function read($pending = null, $running = null) {
            return $this->getRest($pending, $running);
        }

        /**
         * Update sdn subnet object configuration.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dnszoneprefix dns domain zone prefix  ex: 'adm' -&amp;gt; &amp;lt;hostname&amp;gt;.adm.mydomain.com
         * @param string $gateway Subnet Gateway: Will be assign on vnet for layer3 zones
         * @param bool $snat enable masquerade for this subnet if pve-firewall
         * @return Result
         */
        public function setRest($delete = null, $digest = null, $dnszoneprefix = null, $gateway = null, $snat = null) {
            $params = ['delete' => $delete,
                'digest' => $digest,
                'dnszoneprefix' => $dnszoneprefix,
                'gateway' => $gateway,
                'snat' => $snat];
            return $this->client->set("/cluster/sdn/vnets/{$this->vnet}/subnets/{$this->subnet}", $params);
        }

        /**
         * Update sdn subnet object configuration.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dnszoneprefix dns domain zone prefix  ex: 'adm' -&amp;gt; &amp;lt;hostname&amp;gt;.adm.mydomain.com
         * @param string $gateway Subnet Gateway: Will be assign on vnet for layer3 zones
         * @param bool $snat enable masquerade for this subnet if pve-firewall
         * @return Result
         */
        public function update($delete = null, $digest = null, $dnszoneprefix = null, $gateway = null, $snat = null) {
            return $this->setRest($delete, $digest, $dnszoneprefix, $gateway, $snat);
        }

    }

    /**
     * Class PVESdnClusterZones
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESdnClusterZones {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemZonesSdnClusterZone
         * @param zone
         * @return PVEItemZonesSdnClusterZone
         */
        public function get($zone) {
            return new PVEItemZonesSdnClusterZone($this->client, $zone);
        }

        /**
         * SDN zones index.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @param string $type Only list SDN zones of specific type
         *   Enum: evpn,faucet,qinq,simple,vlan,vxlan
         * @return Result
         */
        public function getRest($pending = null, $running = null, $type = null) {
            $params = ['pending' => $pending,
                'running' => $running,
                'type' => $type];
            return $this->client->get("/cluster/sdn/zones", $params);
        }

        /**
         * SDN zones index.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @param string $type Only list SDN zones of specific type
         *   Enum: evpn,faucet,qinq,simple,vlan,vxlan
         * @return Result
         */
        public function index($pending = null, $running = null, $type = null) {
            return $this->getRest($pending, $running, $type);
        }

        /**
         * Create a new sdn zone object.
         * @param string $type Plugin type.
         *   Enum: evpn,faucet,qinq,simple,vlan,vxlan
         * @param string $zone The SDN zone object identifier.
         * @param string $bridge 
         * @param string $controller Frr router name
         * @param string $dns dns api server
         * @param string $dnszone dns domain zone  ex: mydomain.com
         * @param int $dp_id Faucet dataplane id
         * @param string $exitnodes List of cluster node names.
         * @param string $ipam use a specific ipam
         * @param string $mac Anycast logical router mac address
         * @param int $mtu MTU
         * @param string $nodes List of cluster node names.
         * @param string $peers peers address list.
         * @param string $reversedns reverse dns api server
         * @param int $tag Service-VLAN Tag
         * @param string $vlan_protocol 
         *   Enum: 802.1q,802.1ad
         * @param int $vrf_vxlan l3vni.
         * @return Result
         */
        public function createRest($type, $zone, $bridge = null, $controller = null, $dns = null, $dnszone = null, $dp_id = null, $exitnodes = null, $ipam = null, $mac = null, $mtu = null, $nodes = null, $peers = null, $reversedns = null, $tag = null, $vlan_protocol = null, $vrf_vxlan = null) {
            $params = ['type' => $type,
                'zone' => $zone,
                'bridge' => $bridge,
                'controller' => $controller,
                'dns' => $dns,
                'dnszone' => $dnszone,
                'dp-id' => $dp_id,
                'exitnodes' => $exitnodes,
                'ipam' => $ipam,
                'mac' => $mac,
                'mtu' => $mtu,
                'nodes' => $nodes,
                'peers' => $peers,
                'reversedns' => $reversedns,
                'tag' => $tag,
                'vlan-protocol' => $vlan_protocol,
                'vrf-vxlan' => $vrf_vxlan];
            return $this->client->create("/cluster/sdn/zones", $params);
        }

        /**
         * Create a new sdn zone object.
         * @param string $type Plugin type.
         *   Enum: evpn,faucet,qinq,simple,vlan,vxlan
         * @param string $zone The SDN zone object identifier.
         * @param string $bridge 
         * @param string $controller Frr router name
         * @param string $dns dns api server
         * @param string $dnszone dns domain zone  ex: mydomain.com
         * @param int $dp_id Faucet dataplane id
         * @param string $exitnodes List of cluster node names.
         * @param string $ipam use a specific ipam
         * @param string $mac Anycast logical router mac address
         * @param int $mtu MTU
         * @param string $nodes List of cluster node names.
         * @param string $peers peers address list.
         * @param string $reversedns reverse dns api server
         * @param int $tag Service-VLAN Tag
         * @param string $vlan_protocol 
         *   Enum: 802.1q,802.1ad
         * @param int $vrf_vxlan l3vni.
         * @return Result
         */
        public function create($type, $zone, $bridge = null, $controller = null, $dns = null, $dnszone = null, $dp_id = null, $exitnodes = null, $ipam = null, $mac = null, $mtu = null, $nodes = null, $peers = null, $reversedns = null, $tag = null, $vlan_protocol = null, $vrf_vxlan = null) {
            return $this->createRest($type, $zone, $bridge, $controller, $dns, $dnszone, $dp_id, $exitnodes, $ipam, $mac, $mtu, $nodes, $peers, $reversedns, $tag, $vlan_protocol, $vrf_vxlan);
        }

    }

    /**
     * Class PVEItemZonesSdnClusterZone
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemZonesSdnClusterZone {

        /**
         * @ignore
         */
        private $zone;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $zone) {
            $this->client = $client;
            $this->zone = $zone;
        }

        /**
         * Delete sdn zone object configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/sdn/zones/{$this->zone}");
        }

        /**
         * Delete sdn zone object configuration.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read sdn zone configuration.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function getRest($pending = null, $running = null) {
            $params = ['pending' => $pending,
                'running' => $running];
            return $this->client->get("/cluster/sdn/zones/{$this->zone}", $params);
        }

        /**
         * Read sdn zone configuration.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function read($pending = null, $running = null) {
            return $this->getRest($pending, $running);
        }

        /**
         * Update sdn zone object configuration.
         * @param string $bridge 
         * @param string $controller Frr router name
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dns dns api server
         * @param string $dnszone dns domain zone  ex: mydomain.com
         * @param int $dp_id Faucet dataplane id
         * @param string $exitnodes List of cluster node names.
         * @param string $ipam use a specific ipam
         * @param string $mac Anycast logical router mac address
         * @param int $mtu MTU
         * @param string $nodes List of cluster node names.
         * @param string $peers peers address list.
         * @param string $reversedns reverse dns api server
         * @param int $tag Service-VLAN Tag
         * @param string $vlan_protocol 
         *   Enum: 802.1q,802.1ad
         * @param int $vrf_vxlan l3vni.
         * @return Result
         */
        public function setRest($bridge = null, $controller = null, $delete = null, $digest = null, $dns = null, $dnszone = null, $dp_id = null, $exitnodes = null, $ipam = null, $mac = null, $mtu = null, $nodes = null, $peers = null, $reversedns = null, $tag = null, $vlan_protocol = null, $vrf_vxlan = null) {
            $params = ['bridge' => $bridge,
                'controller' => $controller,
                'delete' => $delete,
                'digest' => $digest,
                'dns' => $dns,
                'dnszone' => $dnszone,
                'dp-id' => $dp_id,
                'exitnodes' => $exitnodes,
                'ipam' => $ipam,
                'mac' => $mac,
                'mtu' => $mtu,
                'nodes' => $nodes,
                'peers' => $peers,
                'reversedns' => $reversedns,
                'tag' => $tag,
                'vlan-protocol' => $vlan_protocol,
                'vrf-vxlan' => $vrf_vxlan];
            return $this->client->set("/cluster/sdn/zones/{$this->zone}", $params);
        }

        /**
         * Update sdn zone object configuration.
         * @param string $bridge 
         * @param string $controller Frr router name
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dns dns api server
         * @param string $dnszone dns domain zone  ex: mydomain.com
         * @param int $dp_id Faucet dataplane id
         * @param string $exitnodes List of cluster node names.
         * @param string $ipam use a specific ipam
         * @param string $mac Anycast logical router mac address
         * @param int $mtu MTU
         * @param string $nodes List of cluster node names.
         * @param string $peers peers address list.
         * @param string $reversedns reverse dns api server
         * @param int $tag Service-VLAN Tag
         * @param string $vlan_protocol 
         *   Enum: 802.1q,802.1ad
         * @param int $vrf_vxlan l3vni.
         * @return Result
         */
        public function update($bridge = null, $controller = null, $delete = null, $digest = null, $dns = null, $dnszone = null, $dp_id = null, $exitnodes = null, $ipam = null, $mac = null, $mtu = null, $nodes = null, $peers = null, $reversedns = null, $tag = null, $vlan_protocol = null, $vrf_vxlan = null) {
            return $this->setRest($bridge, $controller, $delete, $digest, $dns, $dnszone, $dp_id, $exitnodes, $ipam, $mac, $mtu, $nodes, $peers, $reversedns, $tag, $vlan_protocol, $vrf_vxlan);
        }

    }

    /**
     * Class PVESdnClusterControllers
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESdnClusterControllers {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemControllersSdnClusterController
         * @param controller
         * @return PVEItemControllersSdnClusterController
         */
        public function get($controller) {
            return new PVEItemControllersSdnClusterController($this->client, $controller);
        }

        /**
         * SDN controllers index.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @param string $type Only list sdn controllers of specific type
         *   Enum: bgp,evpn,faucet
         * @return Result
         */
        public function getRest($pending = null, $running = null, $type = null) {
            $params = ['pending' => $pending,
                'running' => $running,
                'type' => $type];
            return $this->client->get("/cluster/sdn/controllers", $params);
        }

        /**
         * SDN controllers index.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @param string $type Only list sdn controllers of specific type
         *   Enum: bgp,evpn,faucet
         * @return Result
         */
        public function index($pending = null, $running = null, $type = null) {
            return $this->getRest($pending, $running, $type);
        }

        /**
         * Create a new sdn controller object.
         * @param string $controller The SDN controller object identifier.
         * @param string $type Plugin type.
         *   Enum: bgp,evpn,faucet
         * @param int $asn autonomous system number
         * @param bool $ebgp Enable ebgp. (remote-as external)
         * @param int $ebgp_multihop 
         * @param string $loopback source loopback interface.
         * @param string $node The cluster node name.
         * @param string $peers peers address list.
         * @return Result
         */
        public function createRest($controller, $type, $asn = null, $ebgp = null, $ebgp_multihop = null, $loopback = null, $node = null, $peers = null) {
            $params = ['controller' => $controller,
                'type' => $type,
                'asn' => $asn,
                'ebgp' => $ebgp,
                'ebgp-multihop' => $ebgp_multihop,
                'loopback' => $loopback,
                'node' => $node,
                'peers' => $peers];
            return $this->client->create("/cluster/sdn/controllers", $params);
        }

        /**
         * Create a new sdn controller object.
         * @param string $controller The SDN controller object identifier.
         * @param string $type Plugin type.
         *   Enum: bgp,evpn,faucet
         * @param int $asn autonomous system number
         * @param bool $ebgp Enable ebgp. (remote-as external)
         * @param int $ebgp_multihop 
         * @param string $loopback source loopback interface.
         * @param string $node The cluster node name.
         * @param string $peers peers address list.
         * @return Result
         */
        public function create($controller, $type, $asn = null, $ebgp = null, $ebgp_multihop = null, $loopback = null, $node = null, $peers = null) {
            return $this->createRest($controller, $type, $asn, $ebgp, $ebgp_multihop, $loopback, $node, $peers);
        }

    }

    /**
     * Class PVEItemControllersSdnClusterController
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemControllersSdnClusterController {

        /**
         * @ignore
         */
        private $controller;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $controller) {
            $this->client = $client;
            $this->controller = $controller;
        }

        /**
         * Delete sdn controller object configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/sdn/controllers/{$this->controller}");
        }

        /**
         * Delete sdn controller object configuration.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read sdn controller configuration.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function getRest($pending = null, $running = null) {
            $params = ['pending' => $pending,
                'running' => $running];
            return $this->client->get("/cluster/sdn/controllers/{$this->controller}", $params);
        }

        /**
         * Read sdn controller configuration.
         * @param bool $pending Display pending config.
         * @param bool $running Display running config.
         * @return Result
         */
        public function read($pending = null, $running = null) {
            return $this->getRest($pending, $running);
        }

        /**
         * Update sdn controller object configuration.
         * @param int $asn autonomous system number
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $ebgp Enable ebgp. (remote-as external)
         * @param int $ebgp_multihop 
         * @param string $loopback source loopback interface.
         * @param string $node The cluster node name.
         * @param string $peers peers address list.
         * @return Result
         */
        public function setRest($asn = null, $delete = null, $digest = null, $ebgp = null, $ebgp_multihop = null, $loopback = null, $node = null, $peers = null) {
            $params = ['asn' => $asn,
                'delete' => $delete,
                'digest' => $digest,
                'ebgp' => $ebgp,
                'ebgp-multihop' => $ebgp_multihop,
                'loopback' => $loopback,
                'node' => $node,
                'peers' => $peers];
            return $this->client->set("/cluster/sdn/controllers/{$this->controller}", $params);
        }

        /**
         * Update sdn controller object configuration.
         * @param int $asn autonomous system number
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $ebgp Enable ebgp. (remote-as external)
         * @param int $ebgp_multihop 
         * @param string $loopback source loopback interface.
         * @param string $node The cluster node name.
         * @param string $peers peers address list.
         * @return Result
         */
        public function update($asn = null, $delete = null, $digest = null, $ebgp = null, $ebgp_multihop = null, $loopback = null, $node = null, $peers = null) {
            return $this->setRest($asn, $delete, $digest, $ebgp, $ebgp_multihop, $loopback, $node, $peers);
        }

    }

    /**
     * Class PVESdnClusterIpams
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESdnClusterIpams {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemIpamsSdnClusterIpam
         * @param ipam
         * @return PVEItemIpamsSdnClusterIpam
         */
        public function get($ipam) {
            return new PVEItemIpamsSdnClusterIpam($this->client, $ipam);
        }

        /**
         * SDN ipams index.
         * @param string $type Only list sdn ipams of specific type
         *   Enum: netbox,phpipam,pve
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/cluster/sdn/ipams", $params);
        }

        /**
         * SDN ipams index.
         * @param string $type Only list sdn ipams of specific type
         *   Enum: netbox,phpipam,pve
         * @return Result
         */
        public function index($type = null) {
            return $this->getRest($type);
        }

        /**
         * Create a new sdn ipam object.
         * @param string $ipam The SDN ipam object identifier.
         * @param string $type Plugin type.
         *   Enum: netbox,phpipam,pve
         * @param int $section 
         * @param string $token 
         * @param string $url 
         * @return Result
         */
        public function createRest($ipam, $type, $section = null, $token = null, $url = null) {
            $params = ['ipam' => $ipam,
                'type' => $type,
                'section' => $section,
                'token' => $token,
                'url' => $url];
            return $this->client->create("/cluster/sdn/ipams", $params);
        }

        /**
         * Create a new sdn ipam object.
         * @param string $ipam The SDN ipam object identifier.
         * @param string $type Plugin type.
         *   Enum: netbox,phpipam,pve
         * @param int $section 
         * @param string $token 
         * @param string $url 
         * @return Result
         */
        public function create($ipam, $type, $section = null, $token = null, $url = null) {
            return $this->createRest($ipam, $type, $section, $token, $url);
        }

    }

    /**
     * Class PVEItemIpamsSdnClusterIpam
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemIpamsSdnClusterIpam {

        /**
         * @ignore
         */
        private $ipam;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $ipam) {
            $this->client = $client;
            $this->ipam = $ipam;
        }

        /**
         * Delete sdn ipam object configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/sdn/ipams/{$this->ipam}");
        }

        /**
         * Delete sdn ipam object configuration.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read sdn ipam configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/sdn/ipams/{$this->ipam}");
        }

        /**
         * Read sdn ipam configuration.
         * @return Result
         */
        public function read() {
            return $this->getRest();
        }

        /**
         * Update sdn ipam object configuration.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param int $section 
         * @param string $token 
         * @param string $url 
         * @return Result
         */
        public function setRest($delete = null, $digest = null, $section = null, $token = null, $url = null) {
            $params = ['delete' => $delete,
                'digest' => $digest,
                'section' => $section,
                'token' => $token,
                'url' => $url];
            return $this->client->set("/cluster/sdn/ipams/{$this->ipam}", $params);
        }

        /**
         * Update sdn ipam object configuration.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param int $section 
         * @param string $token 
         * @param string $url 
         * @return Result
         */
        public function update($delete = null, $digest = null, $section = null, $token = null, $url = null) {
            return $this->setRest($delete, $digest, $section, $token, $url);
        }

    }

    /**
     * Class PVESdnClusterDns
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESdnClusterDns {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemDnsSdnClusterDns
         * @param dns
         * @return PVEItemDnsSdnClusterDns
         */
        public function get($dns) {
            return new PVEItemDnsSdnClusterDns($this->client, $dns);
        }

        /**
         * SDN dns index.
         * @param string $type Only list sdn dns of specific type
         *   Enum: powerdns
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/cluster/sdn/dns", $params);
        }

        /**
         * SDN dns index.
         * @param string $type Only list sdn dns of specific type
         *   Enum: powerdns
         * @return Result
         */
        public function index($type = null) {
            return $this->getRest($type);
        }

        /**
         * Create a new sdn dns object.
         * @param string $dns The SDN dns object identifier.
         * @param string $key 
         * @param string $type Plugin type.
         *   Enum: powerdns
         * @param string $url 
         * @param int $reversemaskv6 
         * @param int $reversev6mask 
         * @param int $ttl 
         * @return Result
         */
        public function createRest($dns, $key, $type, $url, $reversemaskv6 = null, $reversev6mask = null, $ttl = null) {
            $params = ['dns' => $dns,
                'key' => $key,
                'type' => $type,
                'url' => $url,
                'reversemaskv6' => $reversemaskv6,
                'reversev6mask' => $reversev6mask,
                'ttl' => $ttl];
            return $this->client->create("/cluster/sdn/dns", $params);
        }

        /**
         * Create a new sdn dns object.
         * @param string $dns The SDN dns object identifier.
         * @param string $key 
         * @param string $type Plugin type.
         *   Enum: powerdns
         * @param string $url 
         * @param int $reversemaskv6 
         * @param int $reversev6mask 
         * @param int $ttl 
         * @return Result
         */
        public function create($dns, $key, $type, $url, $reversemaskv6 = null, $reversev6mask = null, $ttl = null) {
            return $this->createRest($dns, $key, $type, $url, $reversemaskv6, $reversev6mask, $ttl);
        }

    }

    /**
     * Class PVEItemDnsSdnClusterDns
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemDnsSdnClusterDns {

        /**
         * @ignore
         */
        private $dns;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $dns) {
            $this->client = $client;
            $this->dns = $dns;
        }

        /**
         * Delete sdn dns object configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/cluster/sdn/dns/{$this->dns}");
        }

        /**
         * Delete sdn dns object configuration.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read sdn dns configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/sdn/dns/{$this->dns}");
        }

        /**
         * Read sdn dns configuration.
         * @return Result
         */
        public function read() {
            return $this->getRest();
        }

        /**
         * Update sdn dns object configuration.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $key 
         * @param int $reversemaskv6 
         * @param int $ttl 
         * @param string $url 
         * @return Result
         */
        public function setRest($delete = null, $digest = null, $key = null, $reversemaskv6 = null, $ttl = null, $url = null) {
            $params = ['delete' => $delete,
                'digest' => $digest,
                'key' => $key,
                'reversemaskv6' => $reversemaskv6,
                'ttl' => $ttl,
                'url' => $url];
            return $this->client->set("/cluster/sdn/dns/{$this->dns}", $params);
        }

        /**
         * Update sdn dns object configuration.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $key 
         * @param int $reversemaskv6 
         * @param int $ttl 
         * @param string $url 
         * @return Result
         */
        public function update($delete = null, $digest = null, $key = null, $reversemaskv6 = null, $ttl = null, $url = null) {
            return $this->setRest($delete, $digest, $key, $reversemaskv6, $ttl, $url);
        }

    }

    /**
     * Class PVEClusterLog
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterLog {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Read cluster log
         * @param int $max Maximum number of entries.
         * @return Result
         */
        public function getRest($max = null) {
            $params = ['max' => $max];
            return $this->client->get("/cluster/log", $params);
        }

        /**
         * Read cluster log
         * @param int $max Maximum number of entries.
         * @return Result
         */
        public function log($max = null) {
            return $this->getRest($max);
        }

    }

    /**
     * Class PVEClusterResources
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterResources {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Resources index (cluster wide).
         * @param string $type 
         *   Enum: vm,storage,node,sdn
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/cluster/resources", $params);
        }

        /**
         * Resources index (cluster wide).
         * @param string $type 
         *   Enum: vm,storage,node,sdn
         * @return Result
         */
        public function resources($type = null) {
            return $this->getRest($type);
        }

    }

    /**
     * Class PVEClusterTasks
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterTasks {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * List recent tasks (cluster wide).
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/tasks");
        }

        /**
         * List recent tasks (cluster wide).
         * @return Result
         */
        public function tasks() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEClusterOptions
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterOptions {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get datacenter options.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/options");
        }

        /**
         * Get datacenter options.
         * @return Result
         */
        public function getOptions() {
            return $this->getRest();
        }

        /**
         * Set datacenter options.
         * @param string $bwlimit Set bandwidth/io limits various operations.
         * @param string $console Select the default Console viewer. You can either use the builtin java applet (VNC; deprecated and maps to html5), an external virt-viewer comtatible application (SPICE), an HTML5 based vnc viewer (noVNC), or an HTML5 based console client (xtermjs). If the selected viewer is not available (e.g. SPICE not activated for the VM), the fallback is noVNC.
         *   Enum: applet,vv,html5,xtermjs
         * @param string $delete A list of settings you want to delete.
         * @param string $email_from Specify email address to send notification from (default is root@$hostname)
         * @param string $fencing Set the fencing mode of the HA cluster. Hardware mode needs a valid configuration of fence devices in /etc/pve/ha/fence.cfg. With both all two modes are used.  WARNING: 'hardware' and 'both' are EXPERIMENTAL &amp; WIP
         *   Enum: watchdog,hardware,both
         * @param string $ha Cluster wide HA settings.
         * @param string $http_proxy Specify external http proxy which is used for downloads (example: 'http://username:password@host:port/')
         * @param string $keyboard Default keybord layout for vnc server.
         *   Enum: de,de-ch,da,en-gb,en-us,es,fi,fr,fr-be,fr-ca,fr-ch,hu,is,it,ja,lt,mk,nl,no,pl,pt,pt-br,sv,sl,tr
         * @param string $language Default GUI language.
         *   Enum: ca,da,de,en,es,eu,fa,fr,he,it,ja,nb,nn,pl,pt_BR,ru,sl,sv,tr,zh_CN,zh_TW
         * @param string $mac_prefix Prefix for autogenerated MAC addresses.
         * @param int $max_workers Defines how many workers (per node) are maximal started  on actions like 'stopall VMs' or task from the ha-manager.
         * @param string $migration For cluster wide migration settings.
         * @param bool $migration_unsecure Migration is secure using SSH tunnel by default. For secure private networks you can disable it to speed up migration. Deprecated, use the 'migration' property instead!
         * @param string $u2f u2f
         * @return Result
         */
        public function setRest($bwlimit = null, $console = null, $delete = null, $email_from = null, $fencing = null, $ha = null, $http_proxy = null, $keyboard = null, $language = null, $mac_prefix = null, $max_workers = null, $migration = null, $migration_unsecure = null, $u2f = null) {
            $params = ['bwlimit' => $bwlimit,
                'console' => $console,
                'delete' => $delete,
                'email_from' => $email_from,
                'fencing' => $fencing,
                'ha' => $ha,
                'http_proxy' => $http_proxy,
                'keyboard' => $keyboard,
                'language' => $language,
                'mac_prefix' => $mac_prefix,
                'max_workers' => $max_workers,
                'migration' => $migration,
                'migration_unsecure' => $migration_unsecure,
                'u2f' => $u2f];
            return $this->client->set("/cluster/options", $params);
        }

        /**
         * Set datacenter options.
         * @param string $bwlimit Set bandwidth/io limits various operations.
         * @param string $console Select the default Console viewer. You can either use the builtin java applet (VNC; deprecated and maps to html5), an external virt-viewer comtatible application (SPICE), an HTML5 based vnc viewer (noVNC), or an HTML5 based console client (xtermjs). If the selected viewer is not available (e.g. SPICE not activated for the VM), the fallback is noVNC.
         *   Enum: applet,vv,html5,xtermjs
         * @param string $delete A list of settings you want to delete.
         * @param string $email_from Specify email address to send notification from (default is root@$hostname)
         * @param string $fencing Set the fencing mode of the HA cluster. Hardware mode needs a valid configuration of fence devices in /etc/pve/ha/fence.cfg. With both all two modes are used.  WARNING: 'hardware' and 'both' are EXPERIMENTAL &amp; WIP
         *   Enum: watchdog,hardware,both
         * @param string $ha Cluster wide HA settings.
         * @param string $http_proxy Specify external http proxy which is used for downloads (example: 'http://username:password@host:port/')
         * @param string $keyboard Default keybord layout for vnc server.
         *   Enum: de,de-ch,da,en-gb,en-us,es,fi,fr,fr-be,fr-ca,fr-ch,hu,is,it,ja,lt,mk,nl,no,pl,pt,pt-br,sv,sl,tr
         * @param string $language Default GUI language.
         *   Enum: ca,da,de,en,es,eu,fa,fr,he,it,ja,nb,nn,pl,pt_BR,ru,sl,sv,tr,zh_CN,zh_TW
         * @param string $mac_prefix Prefix for autogenerated MAC addresses.
         * @param int $max_workers Defines how many workers (per node) are maximal started  on actions like 'stopall VMs' or task from the ha-manager.
         * @param string $migration For cluster wide migration settings.
         * @param bool $migration_unsecure Migration is secure using SSH tunnel by default. For secure private networks you can disable it to speed up migration. Deprecated, use the 'migration' property instead!
         * @param string $u2f u2f
         * @return Result
         */
        public function setOptions($bwlimit = null, $console = null, $delete = null, $email_from = null, $fencing = null, $ha = null, $http_proxy = null, $keyboard = null, $language = null, $mac_prefix = null, $max_workers = null, $migration = null, $migration_unsecure = null, $u2f = null) {
            return $this->setRest($bwlimit, $console, $delete, $email_from, $fencing, $ha, $http_proxy, $keyboard, $language, $mac_prefix, $max_workers, $migration, $migration_unsecure, $u2f);
        }

    }

    /**
     * Class PVEClusterStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterStatus {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get cluster status information.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/cluster/status");
        }

        /**
         * Get cluster status information.
         * @return Result
         */
        public function getStatus() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEClusterNextid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEClusterNextid {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get next free VMID. If you pass an VMID it will raise an error if the ID is already used.
         * @param int $vmid The (unique) ID of the VM.
         * @return Result
         */
        public function getRest($vmid = null) {
            $params = ['vmid' => $vmid];
            return $this->client->get("/cluster/nextid", $params);
        }

        /**
         * Get next free VMID. If you pass an VMID it will raise an error if the ID is already used.
         * @param int $vmid The (unique) ID of the VM.
         * @return Result
         */
        public function nextid($vmid = null) {
            return $this->getRest($vmid);
        }

    }

    /**
     * Class PVENodes
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodes {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemNodesNode
         * @param node
         * @return PVEItemNodesNode
         */
        public function get($node) {
            return new PVEItemNodesNode($this->client, $node);
        }

        /**
         * Cluster node index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes");
        }

        /**
         * Cluster node index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemNodesNode
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemNodesNode {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $qemu;

        /**
         * Get NodeNodesQemu
         * @return PVENodeNodesQemu
         */
        public function getQemu() {
            return $this->qemu ?: ($this->qemu = new PVENodeNodesQemu($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $lxc;

        /**
         * Get NodeNodesLxc
         * @return PVENodeNodesLxc
         */
        public function getLxc() {
            return $this->lxc ?: ($this->lxc = new PVENodeNodesLxc($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $ceph;

        /**
         * Get NodeNodesCeph
         * @return PVENodeNodesCeph
         */
        public function getCeph() {
            return $this->ceph ?: ($this->ceph = new PVENodeNodesCeph($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $vzdump;

        /**
         * Get NodeNodesVzdump
         * @return PVENodeNodesVzdump
         */
        public function getVzdump() {
            return $this->vzdump ?: ($this->vzdump = new PVENodeNodesVzdump($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $services;

        /**
         * Get NodeNodesServices
         * @return PVENodeNodesServices
         */
        public function getServices() {
            return $this->services ?: ($this->services = new PVENodeNodesServices($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $subscription;

        /**
         * Get NodeNodesSubscription
         * @return PVENodeNodesSubscription
         */
        public function getSubscription() {
            return $this->subscription ?: ($this->subscription = new PVENodeNodesSubscription($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $network;

        /**
         * Get NodeNodesNetwork
         * @return PVENodeNodesNetwork
         */
        public function getNetwork() {
            return $this->network ?: ($this->network = new PVENodeNodesNetwork($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $tasks;

        /**
         * Get NodeNodesTasks
         * @return PVENodeNodesTasks
         */
        public function getTasks() {
            return $this->tasks ?: ($this->tasks = new PVENodeNodesTasks($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $scan;

        /**
         * Get NodeNodesScan
         * @return PVENodeNodesScan
         */
        public function getScan() {
            return $this->scan ?: ($this->scan = new PVENodeNodesScan($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $hardware;

        /**
         * Get NodeNodesHardware
         * @return PVENodeNodesHardware
         */
        public function getHardware() {
            return $this->hardware ?: ($this->hardware = new PVENodeNodesHardware($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $capabilities;

        /**
         * Get NodeNodesCapabilities
         * @return PVENodeNodesCapabilities
         */
        public function getCapabilities() {
            return $this->capabilities ?: ($this->capabilities = new PVENodeNodesCapabilities($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $storage;

        /**
         * Get NodeNodesStorage
         * @return PVENodeNodesStorage
         */
        public function getStorage() {
            return $this->storage ?: ($this->storage = new PVENodeNodesStorage($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $disks;

        /**
         * Get NodeNodesDisks
         * @return PVENodeNodesDisks
         */
        public function getDisks() {
            return $this->disks ?: ($this->disks = new PVENodeNodesDisks($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $apt;

        /**
         * Get NodeNodesApt
         * @return PVENodeNodesApt
         */
        public function getApt() {
            return $this->apt ?: ($this->apt = new PVENodeNodesApt($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $firewall;

        /**
         * Get NodeNodesFirewall
         * @return PVENodeNodesFirewall
         */
        public function getFirewall() {
            return $this->firewall ?: ($this->firewall = new PVENodeNodesFirewall($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $replication;

        /**
         * Get NodeNodesReplication
         * @return PVENodeNodesReplication
         */
        public function getReplication() {
            return $this->replication ?: ($this->replication = new PVENodeNodesReplication($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $certificates;

        /**
         * Get NodeNodesCertificates
         * @return PVENodeNodesCertificates
         */
        public function getCertificates() {
            return $this->certificates ?: ($this->certificates = new PVENodeNodesCertificates($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $config;

        /**
         * Get NodeNodesConfig
         * @return PVENodeNodesConfig
         */
        public function getConfig() {
            return $this->config ?: ($this->config = new PVENodeNodesConfig($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $sdn;

        /**
         * Get NodeNodesSdn
         * @return PVENodeNodesSdn
         */
        public function getSdn() {
            return $this->sdn ?: ($this->sdn = new PVENodeNodesSdn($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $version;

        /**
         * Get NodeNodesVersion
         * @return PVENodeNodesVersion
         */
        public function getVersion() {
            return $this->version ?: ($this->version = new PVENodeNodesVersion($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get NodeNodesStatus
         * @return PVENodeNodesStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVENodeNodesStatus($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $netstat;

        /**
         * Get NodeNodesNetstat
         * @return PVENodeNodesNetstat
         */
        public function getNetstat() {
            return $this->netstat ?: ($this->netstat = new PVENodeNodesNetstat($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $execute;

        /**
         * Get NodeNodesExecute
         * @return PVENodeNodesExecute
         */
        public function getExecute() {
            return $this->execute ?: ($this->execute = new PVENodeNodesExecute($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $wakeonlan;

        /**
         * Get NodeNodesWakeonlan
         * @return PVENodeNodesWakeonlan
         */
        public function getWakeonlan() {
            return $this->wakeonlan ?: ($this->wakeonlan = new PVENodeNodesWakeonlan($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $rrd;

        /**
         * Get NodeNodesRrd
         * @return PVENodeNodesRrd
         */
        public function getRrd() {
            return $this->rrd ?: ($this->rrd = new PVENodeNodesRrd($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $rrddata;

        /**
         * Get NodeNodesRrddata
         * @return PVENodeNodesRrddata
         */
        public function getRrddata() {
            return $this->rrddata ?: ($this->rrddata = new PVENodeNodesRrddata($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $syslog;

        /**
         * Get NodeNodesSyslog
         * @return PVENodeNodesSyslog
         */
        public function getSyslog() {
            return $this->syslog ?: ($this->syslog = new PVENodeNodesSyslog($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $journal;

        /**
         * Get NodeNodesJournal
         * @return PVENodeNodesJournal
         */
        public function getJournal() {
            return $this->journal ?: ($this->journal = new PVENodeNodesJournal($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $vncshell;

        /**
         * Get NodeNodesVncshell
         * @return PVENodeNodesVncshell
         */
        public function getVncshell() {
            return $this->vncshell ?: ($this->vncshell = new PVENodeNodesVncshell($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $termproxy;

        /**
         * Get NodeNodesTermproxy
         * @return PVENodeNodesTermproxy
         */
        public function getTermproxy() {
            return $this->termproxy ?: ($this->termproxy = new PVENodeNodesTermproxy($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $vncwebsocket;

        /**
         * Get NodeNodesVncwebsocket
         * @return PVENodeNodesVncwebsocket
         */
        public function getVncwebsocket() {
            return $this->vncwebsocket ?: ($this->vncwebsocket = new PVENodeNodesVncwebsocket($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $spiceshell;

        /**
         * Get NodeNodesSpiceshell
         * @return PVENodeNodesSpiceshell
         */
        public function getSpiceshell() {
            return $this->spiceshell ?: ($this->spiceshell = new PVENodeNodesSpiceshell($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $dns;

        /**
         * Get NodeNodesDns
         * @return PVENodeNodesDns
         */
        public function getDns() {
            return $this->dns ?: ($this->dns = new PVENodeNodesDns($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $time;

        /**
         * Get NodeNodesTime
         * @return PVENodeNodesTime
         */
        public function getTime() {
            return $this->time ?: ($this->time = new PVENodeNodesTime($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $aplinfo;

        /**
         * Get NodeNodesAplinfo
         * @return PVENodeNodesAplinfo
         */
        public function getAplinfo() {
            return $this->aplinfo ?: ($this->aplinfo = new PVENodeNodesAplinfo($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $report;

        /**
         * Get NodeNodesReport
         * @return PVENodeNodesReport
         */
        public function getReport() {
            return $this->report ?: ($this->report = new PVENodeNodesReport($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $startall;

        /**
         * Get NodeNodesStartall
         * @return PVENodeNodesStartall
         */
        public function getStartall() {
            return $this->startall ?: ($this->startall = new PVENodeNodesStartall($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $stopall;

        /**
         * Get NodeNodesStopall
         * @return PVENodeNodesStopall
         */
        public function getStopall() {
            return $this->stopall ?: ($this->stopall = new PVENodeNodesStopall($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $migrateall;

        /**
         * Get NodeNodesMigrateall
         * @return PVENodeNodesMigrateall
         */
        public function getMigrateall() {
            return $this->migrateall ?: ($this->migrateall = new PVENodeNodesMigrateall($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $hosts;

        /**
         * Get NodeNodesHosts
         * @return PVENodeNodesHosts
         */
        public function getHosts() {
            return $this->hosts ?: ($this->hosts = new PVENodeNodesHosts($this->client, $this->node));
        }

        /**
         * Node index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}");
        }

        /**
         * Node index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesQemu
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesQemu {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemQemuNodeNodesVmid
         * @param vmid
         * @return PVEItemQemuNodeNodesVmid
         */
        public function get($vmid) {
            return new PVEItemQemuNodeNodesVmid($this->client, $this->node, $vmid);
        }

        /**
         * Virtual machine index (per node).
         * @param bool $full Determine the full status of active VMs.
         * @return Result
         */
        public function getRest($full = null) {
            $params = ['full' => $full];
            return $this->client->get("/nodes/{$this->node}/qemu", $params);
        }

        /**
         * Virtual machine index (per node).
         * @param bool $full Determine the full status of active VMs.
         * @return Result
         */
        public function vmlist($full = null) {
            return $this->getRest($full);
        }

        /**
         * Create or restore a virtual machine.
         * @param int $vmid The (unique) ID of the VM.
         * @param bool $acpi Enable/disable ACPI.
         * @param string $agent Enable/disable Qemu GuestAgent and its properties.
         * @param string $arch Virtual processor architecture. Defaults to the host.
         *   Enum: x86_64,aarch64
         * @param string $archive The backup archive. Either the file system path to a .tar or .vma file (use '-' to pipe data from stdin) or a proxmox storage backup volume identifier.
         * @param string $args Arbitrary arguments passed to kvm.
         * @param string $audio0 Configure a audio device, useful in combination with QXL/Spice.
         * @param bool $autostart Automatic restart after crash (currently ignored).
         * @param int $balloon Amount of target RAM for the VM in MB. Using zero disables the ballon driver.
         * @param string $bios Select BIOS implementation.
         *   Enum: seabios,ovmf
         * @param string $boot Specify guest boot order. Use with 'order=', usage with no key or 'legacy=' is deprecated.
         * @param string $bootdisk Enable booting from specified disk. Deprecated: Use 'boot: order=foo;bar' instead.
         * @param int $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param string $cdrom This is an alias for option -ide2
         * @param string $cicustom cloud-init: Specify custom files to replace the automatically generated ones at start.
         * @param string $cipassword cloud-init: Password to assign the user. Using this is generally not recommended. Use ssh keys instead. Also note that older cloud-init versions do not support hashed passwords.
         * @param string $citype Specifies the cloud-init configuration format. The default depends on the configured operating system type (`ostype`. We use the `nocloud` format for Linux, and `configdrive2` for windows.
         *   Enum: configdrive2,nocloud,opennebula
         * @param string $ciuser cloud-init: User name to change ssh keys and password for instead of the image's configured default user.
         * @param int $cores The number of cores per socket.
         * @param string $cpu Emulated CPU type.
         * @param float $cpulimit Limit of CPU usage.
         * @param int $cpuunits CPU weight for a VM.
         * @param string $description Description for the VM. Shown in the web-interface VM's summary. This is saved as comment inside the configuration file.
         * @param string $efidisk0 Configure a Disk for storing EFI vars. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume. Note that SIZE_IN_GiB is ignored here and that the default EFI vars are copied to the volume instead.
         * @param bool $force Allow to overwrite existing VM.
         * @param bool $freeze Freeze CPU at startup (use 'c' monitor command to start execution).
         * @param string $hookscript Script that will be executed during various steps in the vms lifetime.
         * @param array $hostpciN Map host PCI devices into guest.
         * @param string $hotplug Selectively enable hotplug features. This is a comma separated list of hotplug features: 'network', 'disk', 'cpu', 'memory' and 'usb'. Use '0' to disable hotplug completely. Value '1' is an alias for the default 'network,disk,usb'.
         * @param string $hugepages Enable/disable hugepages memory.
         *   Enum: any,2,1024
         * @param array $ideN Use volume as IDE hard disk or CD-ROM (n is 0 to 3). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $ipconfigN cloud-init: Specify IP addresses and gateways for the corresponding interface.  IP addresses use CIDR notation, gateways are optional but need an IP of the same type specified.  The special string 'dhcp' can be used for IP addresses to use DHCP, in which case no explicit gateway should be provided. For IPv6 the special string 'auto' can be used to use stateless autoconfiguration. This requires cloud-init 19.4 or newer.  If cloud-init is enabled and neither an IPv4 nor an IPv6 address is specified, it defaults to using dhcp on IPv4. 
         * @param string $ivshmem Inter-VM shared memory. Useful for direct communication between VMs, or to the host.
         * @param bool $keephugepages Use together with hugepages. If enabled, hugepages will not not be deleted after VM shutdown and can be used for subsequent starts.
         * @param string $keyboard Keybord layout for vnc server. Default is read from the '/etc/pve/datacenter.cfg' configuration file.It should not be necessary to set it.
         *   Enum: de,de-ch,da,en-gb,en-us,es,fi,fr,fr-be,fr-ca,fr-ch,hu,is,it,ja,lt,mk,nl,no,pl,pt,pt-br,sv,sl,tr
         * @param bool $kvm Enable/disable KVM hardware virtualization.
         * @param bool $live_restore Start the VM immediately from the backup and restore in background. PBS only.
         * @param bool $localtime Set the real time clock to local time. This is enabled by default if ostype indicates a Microsoft OS.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,clone,create,migrate,rollback,snapshot,snapshot-delete,suspending,suspended
         * @param string $machine Specifies the Qemu machine type.
         * @param int $memory Amount of RAM for the VM in MB. This is the maximum available memory when you use the balloon device.
         * @param float $migrate_downtime Set maximum tolerated downtime (in seconds) for migrations.
         * @param int $migrate_speed Set maximum speed (in MB/s) for migrations. Value 0 is no limit.
         * @param string $name Set a name for the VM. Only used on the configuration web interface.
         * @param string $nameserver cloud-init: Sets DNS server IP address for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $netN Specify network devices.
         * @param bool $numa Enable/disable NUMA.
         * @param array $numaN NUMA topology.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype Specify guest operating system.
         *   Enum: other,wxp,w2k,w2k3,w2k8,wvista,win7,win8,win10,l24,l26,solaris
         * @param array $parallelN Map host parallel devices (n is 0 to 2).
         * @param string $pool Add the VM to the specified pool.
         * @param bool $protection Sets the protection flag of the VM. This will disable the remove VM and remove disk operations.
         * @param bool $reboot Allow reboot. If set to '0' the VM exit on reboot.
         * @param string $rng0 Configure a VirtIO-based Random Number Generator.
         * @param array $sataN Use volume as SATA hard disk or CD-ROM (n is 0 to 5). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $scsiN Use volume as SCSI hard disk or CD-ROM (n is 0 to 30). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $scsihw SCSI controller model
         *   Enum: lsi,lsi53c810,virtio-scsi-pci,virtio-scsi-single,megasas,pvscsi
         * @param string $searchdomain cloud-init: Sets DNS search domains for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $serialN Create a serial device inside the VM (n is 0 to 3)
         * @param int $shares Amount of memory shares for auto-ballooning. The larger the number is, the more memory this VM gets. Number is relative to weights of all other running VMs. Using zero disables auto-ballooning. Auto-ballooning is done by pvestatd.
         * @param string $smbios1 Specify SMBIOS type 1 fields.
         * @param int $smp The number of CPUs. Please use option -sockets instead.
         * @param int $sockets The number of CPU sockets.
         * @param string $spice_enhancements Configure additional enhancements for SPICE.
         * @param string $sshkeys cloud-init: Setup public SSH keys (one key per line, OpenSSH format).
         * @param bool $start Start VM after it was created successfully.
         * @param string $startdate Set the initial date of the real time clock. Valid format for date are:'now' or '2006-06-17T16:01:21' or '2006-06-17'.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param string $storage Default storage.
         * @param bool $tablet Enable/disable the USB tablet device.
         * @param string $tags Tags of the VM. This is only meta information.
         * @param bool $tdf Enable/disable time drift fix.
         * @param bool $template Enable/disable Template.
         * @param bool $unique Assign a unique random ethernet address.
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @param array $usbN Configure an USB device (n is 0 to 4).
         * @param int $vcpus Number of hotplugged vcpus.
         * @param string $vga Configure the VGA hardware.
         * @param array $virtioN Use volume as VIRTIO hard disk (n is 0 to 15). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $vmgenid Set VM Generation ID. Use '1' to autogenerate on create or update, pass '0' to disable explicitly.
         * @param string $vmstatestorage Default storage for VM state volumes/files.
         * @param string $watchdog Create a virtual hardware watchdog device.
         * @return Result
         */
        public function createRest($vmid, $acpi = null, $agent = null, $arch = null, $archive = null, $args = null, $audio0 = null, $autostart = null, $balloon = null, $bios = null, $boot = null, $bootdisk = null, $bwlimit = null, $cdrom = null, $cicustom = null, $cipassword = null, $citype = null, $ciuser = null, $cores = null, $cpu = null, $cpulimit = null, $cpuunits = null, $description = null, $efidisk0 = null, $force = null, $freeze = null, $hookscript = null, $hostpciN = null, $hotplug = null, $hugepages = null, $ideN = null, $ipconfigN = null, $ivshmem = null, $keephugepages = null, $keyboard = null, $kvm = null, $live_restore = null, $localtime = null, $lock = null, $machine = null, $memory = null, $migrate_downtime = null, $migrate_speed = null, $name = null, $nameserver = null, $netN = null, $numa = null, $numaN = null, $onboot = null, $ostype = null, $parallelN = null, $pool = null, $protection = null, $reboot = null, $rng0 = null, $sataN = null, $scsiN = null, $scsihw = null, $searchdomain = null, $serialN = null, $shares = null, $smbios1 = null, $smp = null, $sockets = null, $spice_enhancements = null, $sshkeys = null, $start = null, $startdate = null, $startup = null, $storage = null, $tablet = null, $tags = null, $tdf = null, $template = null, $unique = null, $unusedN = null, $usbN = null, $vcpus = null, $vga = null, $virtioN = null, $vmgenid = null, $vmstatestorage = null, $watchdog = null) {
            $params = ['vmid' => $vmid,
                'acpi' => $acpi,
                'agent' => $agent,
                'arch' => $arch,
                'archive' => $archive,
                'args' => $args,
                'audio0' => $audio0,
                'autostart' => $autostart,
                'balloon' => $balloon,
                'bios' => $bios,
                'boot' => $boot,
                'bootdisk' => $bootdisk,
                'bwlimit' => $bwlimit,
                'cdrom' => $cdrom,
                'cicustom' => $cicustom,
                'cipassword' => $cipassword,
                'citype' => $citype,
                'ciuser' => $ciuser,
                'cores' => $cores,
                'cpu' => $cpu,
                'cpulimit' => $cpulimit,
                'cpuunits' => $cpuunits,
                'description' => $description,
                'efidisk0' => $efidisk0,
                'force' => $force,
                'freeze' => $freeze,
                'hookscript' => $hookscript,
                'hotplug' => $hotplug,
                'hugepages' => $hugepages,
                'ivshmem' => $ivshmem,
                'keephugepages' => $keephugepages,
                'keyboard' => $keyboard,
                'kvm' => $kvm,
                'live-restore' => $live_restore,
                'localtime' => $localtime,
                'lock' => $lock,
                'machine' => $machine,
                'memory' => $memory,
                'migrate_downtime' => $migrate_downtime,
                'migrate_speed' => $migrate_speed,
                'name' => $name,
                'nameserver' => $nameserver,
                'numa' => $numa,
                'onboot' => $onboot,
                'ostype' => $ostype,
                'pool' => $pool,
                'protection' => $protection,
                'reboot' => $reboot,
                'rng0' => $rng0,
                'scsihw' => $scsihw,
                'searchdomain' => $searchdomain,
                'shares' => $shares,
                'smbios1' => $smbios1,
                'smp' => $smp,
                'sockets' => $sockets,
                'spice_enhancements' => $spice_enhancements,
                'sshkeys' => $sshkeys,
                'start' => $start,
                'startdate' => $startdate,
                'startup' => $startup,
                'storage' => $storage,
                'tablet' => $tablet,
                'tags' => $tags,
                'tdf' => $tdf,
                'template' => $template,
                'unique' => $unique,
                'vcpus' => $vcpus,
                'vga' => $vga,
                'vmgenid' => $vmgenid,
                'vmstatestorage' => $vmstatestorage,
                'watchdog' => $watchdog];
            $this->client->addIndexedParameter($params, 'hostpci', $hostpciN);
            $this->client->addIndexedParameter($params, 'ide', $ideN);
            $this->client->addIndexedParameter($params, 'ipconfig', $ipconfigN);
            $this->client->addIndexedParameter($params, 'net', $netN);
            $this->client->addIndexedParameter($params, 'numa', $numaN);
            $this->client->addIndexedParameter($params, 'parallel', $parallelN);
            $this->client->addIndexedParameter($params, 'sata', $sataN);
            $this->client->addIndexedParameter($params, 'scsi', $scsiN);
            $this->client->addIndexedParameter($params, 'serial', $serialN);
            $this->client->addIndexedParameter($params, 'unused', $unusedN);
            $this->client->addIndexedParameter($params, 'usb', $usbN);
            $this->client->addIndexedParameter($params, 'virtio', $virtioN);
            return $this->client->create("/nodes/{$this->node}/qemu", $params);
        }

        /**
         * Create or restore a virtual machine.
         * @param int $vmid The (unique) ID of the VM.
         * @param bool $acpi Enable/disable ACPI.
         * @param string $agent Enable/disable Qemu GuestAgent and its properties.
         * @param string $arch Virtual processor architecture. Defaults to the host.
         *   Enum: x86_64,aarch64
         * @param string $archive The backup archive. Either the file system path to a .tar or .vma file (use '-' to pipe data from stdin) or a proxmox storage backup volume identifier.
         * @param string $args Arbitrary arguments passed to kvm.
         * @param string $audio0 Configure a audio device, useful in combination with QXL/Spice.
         * @param bool $autostart Automatic restart after crash (currently ignored).
         * @param int $balloon Amount of target RAM for the VM in MB. Using zero disables the ballon driver.
         * @param string $bios Select BIOS implementation.
         *   Enum: seabios,ovmf
         * @param string $boot Specify guest boot order. Use with 'order=', usage with no key or 'legacy=' is deprecated.
         * @param string $bootdisk Enable booting from specified disk. Deprecated: Use 'boot: order=foo;bar' instead.
         * @param int $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param string $cdrom This is an alias for option -ide2
         * @param string $cicustom cloud-init: Specify custom files to replace the automatically generated ones at start.
         * @param string $cipassword cloud-init: Password to assign the user. Using this is generally not recommended. Use ssh keys instead. Also note that older cloud-init versions do not support hashed passwords.
         * @param string $citype Specifies the cloud-init configuration format. The default depends on the configured operating system type (`ostype`. We use the `nocloud` format for Linux, and `configdrive2` for windows.
         *   Enum: configdrive2,nocloud,opennebula
         * @param string $ciuser cloud-init: User name to change ssh keys and password for instead of the image's configured default user.
         * @param int $cores The number of cores per socket.
         * @param string $cpu Emulated CPU type.
         * @param float $cpulimit Limit of CPU usage.
         * @param int $cpuunits CPU weight for a VM.
         * @param string $description Description for the VM. Shown in the web-interface VM's summary. This is saved as comment inside the configuration file.
         * @param string $efidisk0 Configure a Disk for storing EFI vars. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume. Note that SIZE_IN_GiB is ignored here and that the default EFI vars are copied to the volume instead.
         * @param bool $force Allow to overwrite existing VM.
         * @param bool $freeze Freeze CPU at startup (use 'c' monitor command to start execution).
         * @param string $hookscript Script that will be executed during various steps in the vms lifetime.
         * @param array $hostpciN Map host PCI devices into guest.
         * @param string $hotplug Selectively enable hotplug features. This is a comma separated list of hotplug features: 'network', 'disk', 'cpu', 'memory' and 'usb'. Use '0' to disable hotplug completely. Value '1' is an alias for the default 'network,disk,usb'.
         * @param string $hugepages Enable/disable hugepages memory.
         *   Enum: any,2,1024
         * @param array $ideN Use volume as IDE hard disk or CD-ROM (n is 0 to 3). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $ipconfigN cloud-init: Specify IP addresses and gateways for the corresponding interface.  IP addresses use CIDR notation, gateways are optional but need an IP of the same type specified.  The special string 'dhcp' can be used for IP addresses to use DHCP, in which case no explicit gateway should be provided. For IPv6 the special string 'auto' can be used to use stateless autoconfiguration. This requires cloud-init 19.4 or newer.  If cloud-init is enabled and neither an IPv4 nor an IPv6 address is specified, it defaults to using dhcp on IPv4. 
         * @param string $ivshmem Inter-VM shared memory. Useful for direct communication between VMs, or to the host.
         * @param bool $keephugepages Use together with hugepages. If enabled, hugepages will not not be deleted after VM shutdown and can be used for subsequent starts.
         * @param string $keyboard Keybord layout for vnc server. Default is read from the '/etc/pve/datacenter.cfg' configuration file.It should not be necessary to set it.
         *   Enum: de,de-ch,da,en-gb,en-us,es,fi,fr,fr-be,fr-ca,fr-ch,hu,is,it,ja,lt,mk,nl,no,pl,pt,pt-br,sv,sl,tr
         * @param bool $kvm Enable/disable KVM hardware virtualization.
         * @param bool $live_restore Start the VM immediately from the backup and restore in background. PBS only.
         * @param bool $localtime Set the real time clock to local time. This is enabled by default if ostype indicates a Microsoft OS.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,clone,create,migrate,rollback,snapshot,snapshot-delete,suspending,suspended
         * @param string $machine Specifies the Qemu machine type.
         * @param int $memory Amount of RAM for the VM in MB. This is the maximum available memory when you use the balloon device.
         * @param float $migrate_downtime Set maximum tolerated downtime (in seconds) for migrations.
         * @param int $migrate_speed Set maximum speed (in MB/s) for migrations. Value 0 is no limit.
         * @param string $name Set a name for the VM. Only used on the configuration web interface.
         * @param string $nameserver cloud-init: Sets DNS server IP address for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $netN Specify network devices.
         * @param bool $numa Enable/disable NUMA.
         * @param array $numaN NUMA topology.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype Specify guest operating system.
         *   Enum: other,wxp,w2k,w2k3,w2k8,wvista,win7,win8,win10,l24,l26,solaris
         * @param array $parallelN Map host parallel devices (n is 0 to 2).
         * @param string $pool Add the VM to the specified pool.
         * @param bool $protection Sets the protection flag of the VM. This will disable the remove VM and remove disk operations.
         * @param bool $reboot Allow reboot. If set to '0' the VM exit on reboot.
         * @param string $rng0 Configure a VirtIO-based Random Number Generator.
         * @param array $sataN Use volume as SATA hard disk or CD-ROM (n is 0 to 5). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $scsiN Use volume as SCSI hard disk or CD-ROM (n is 0 to 30). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $scsihw SCSI controller model
         *   Enum: lsi,lsi53c810,virtio-scsi-pci,virtio-scsi-single,megasas,pvscsi
         * @param string $searchdomain cloud-init: Sets DNS search domains for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $serialN Create a serial device inside the VM (n is 0 to 3)
         * @param int $shares Amount of memory shares for auto-ballooning. The larger the number is, the more memory this VM gets. Number is relative to weights of all other running VMs. Using zero disables auto-ballooning. Auto-ballooning is done by pvestatd.
         * @param string $smbios1 Specify SMBIOS type 1 fields.
         * @param int $smp The number of CPUs. Please use option -sockets instead.
         * @param int $sockets The number of CPU sockets.
         * @param string $spice_enhancements Configure additional enhancements for SPICE.
         * @param string $sshkeys cloud-init: Setup public SSH keys (one key per line, OpenSSH format).
         * @param bool $start Start VM after it was created successfully.
         * @param string $startdate Set the initial date of the real time clock. Valid format for date are:'now' or '2006-06-17T16:01:21' or '2006-06-17'.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param string $storage Default storage.
         * @param bool $tablet Enable/disable the USB tablet device.
         * @param string $tags Tags of the VM. This is only meta information.
         * @param bool $tdf Enable/disable time drift fix.
         * @param bool $template Enable/disable Template.
         * @param bool $unique Assign a unique random ethernet address.
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @param array $usbN Configure an USB device (n is 0 to 4).
         * @param int $vcpus Number of hotplugged vcpus.
         * @param string $vga Configure the VGA hardware.
         * @param array $virtioN Use volume as VIRTIO hard disk (n is 0 to 15). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $vmgenid Set VM Generation ID. Use '1' to autogenerate on create or update, pass '0' to disable explicitly.
         * @param string $vmstatestorage Default storage for VM state volumes/files.
         * @param string $watchdog Create a virtual hardware watchdog device.
         * @return Result
         */
        public function createVm($vmid, $acpi = null, $agent = null, $arch = null, $archive = null, $args = null, $audio0 = null, $autostart = null, $balloon = null, $bios = null, $boot = null, $bootdisk = null, $bwlimit = null, $cdrom = null, $cicustom = null, $cipassword = null, $citype = null, $ciuser = null, $cores = null, $cpu = null, $cpulimit = null, $cpuunits = null, $description = null, $efidisk0 = null, $force = null, $freeze = null, $hookscript = null, $hostpciN = null, $hotplug = null, $hugepages = null, $ideN = null, $ipconfigN = null, $ivshmem = null, $keephugepages = null, $keyboard = null, $kvm = null, $live_restore = null, $localtime = null, $lock = null, $machine = null, $memory = null, $migrate_downtime = null, $migrate_speed = null, $name = null, $nameserver = null, $netN = null, $numa = null, $numaN = null, $onboot = null, $ostype = null, $parallelN = null, $pool = null, $protection = null, $reboot = null, $rng0 = null, $sataN = null, $scsiN = null, $scsihw = null, $searchdomain = null, $serialN = null, $shares = null, $smbios1 = null, $smp = null, $sockets = null, $spice_enhancements = null, $sshkeys = null, $start = null, $startdate = null, $startup = null, $storage = null, $tablet = null, $tags = null, $tdf = null, $template = null, $unique = null, $unusedN = null, $usbN = null, $vcpus = null, $vga = null, $virtioN = null, $vmgenid = null, $vmstatestorage = null, $watchdog = null) {
            return $this->createRest($vmid, $acpi, $agent, $arch, $archive, $args, $audio0, $autostart, $balloon, $bios, $boot, $bootdisk, $bwlimit, $cdrom, $cicustom, $cipassword, $citype, $ciuser, $cores, $cpu, $cpulimit, $cpuunits, $description, $efidisk0, $force, $freeze, $hookscript, $hostpciN, $hotplug, $hugepages, $ideN, $ipconfigN, $ivshmem, $keephugepages, $keyboard, $kvm, $live_restore, $localtime, $lock, $machine, $memory, $migrate_downtime, $migrate_speed, $name, $nameserver, $netN, $numa, $numaN, $onboot, $ostype, $parallelN, $pool, $protection, $reboot, $rng0, $sataN, $scsiN, $scsihw, $searchdomain, $serialN, $shares, $smbios1, $smp, $sockets, $spice_enhancements, $sshkeys, $start, $startdate, $startup, $storage, $tablet, $tags, $tdf, $template, $unique, $unusedN, $usbN, $vcpus, $vga, $virtioN, $vmgenid, $vmstatestorage, $watchdog);
        }

    }

    /**
     * Class PVEItemQemuNodeNodesVmid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemQemuNodeNodesVmid {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * @ignore
         */
        private $firewall;

        /**
         * Get VmidQemuNodeNodesFirewall
         * @return PVEVmidQemuNodeNodesFirewall
         */
        public function getFirewall() {
            return $this->firewall ?: ($this->firewall = new PVEVmidQemuNodeNodesFirewall($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $agent;

        /**
         * Get VmidQemuNodeNodesAgent
         * @return PVEVmidQemuNodeNodesAgent
         */
        public function getAgent() {
            return $this->agent ?: ($this->agent = new PVEVmidQemuNodeNodesAgent($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $rrd;

        /**
         * Get VmidQemuNodeNodesRrd
         * @return PVEVmidQemuNodeNodesRrd
         */
        public function getRrd() {
            return $this->rrd ?: ($this->rrd = new PVEVmidQemuNodeNodesRrd($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $rrddata;

        /**
         * Get VmidQemuNodeNodesRrddata
         * @return PVEVmidQemuNodeNodesRrddata
         */
        public function getRrddata() {
            return $this->rrddata ?: ($this->rrddata = new PVEVmidQemuNodeNodesRrddata($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $config;

        /**
         * Get VmidQemuNodeNodesConfig
         * @return PVEVmidQemuNodeNodesConfig
         */
        public function getConfig() {
            return $this->config ?: ($this->config = new PVEVmidQemuNodeNodesConfig($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $pending;

        /**
         * Get VmidQemuNodeNodesPending
         * @return PVEVmidQemuNodeNodesPending
         */
        public function getPending() {
            return $this->pending ?: ($this->pending = new PVEVmidQemuNodeNodesPending($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $unlink;

        /**
         * Get VmidQemuNodeNodesUnlink
         * @return PVEVmidQemuNodeNodesUnlink
         */
        public function getUnlink() {
            return $this->unlink ?: ($this->unlink = new PVEVmidQemuNodeNodesUnlink($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $vncproxy;

        /**
         * Get VmidQemuNodeNodesVncproxy
         * @return PVEVmidQemuNodeNodesVncproxy
         */
        public function getVncproxy() {
            return $this->vncproxy ?: ($this->vncproxy = new PVEVmidQemuNodeNodesVncproxy($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $termproxy;

        /**
         * Get VmidQemuNodeNodesTermproxy
         * @return PVEVmidQemuNodeNodesTermproxy
         */
        public function getTermproxy() {
            return $this->termproxy ?: ($this->termproxy = new PVEVmidQemuNodeNodesTermproxy($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $vncwebsocket;

        /**
         * Get VmidQemuNodeNodesVncwebsocket
         * @return PVEVmidQemuNodeNodesVncwebsocket
         */
        public function getVncwebsocket() {
            return $this->vncwebsocket ?: ($this->vncwebsocket = new PVEVmidQemuNodeNodesVncwebsocket($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $spiceproxy;

        /**
         * Get VmidQemuNodeNodesSpiceproxy
         * @return PVEVmidQemuNodeNodesSpiceproxy
         */
        public function getSpiceproxy() {
            return $this->spiceproxy ?: ($this->spiceproxy = new PVEVmidQemuNodeNodesSpiceproxy($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get VmidQemuNodeNodesStatus
         * @return PVEVmidQemuNodeNodesStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVEVmidQemuNodeNodesStatus($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $sendkey;

        /**
         * Get VmidQemuNodeNodesSendkey
         * @return PVEVmidQemuNodeNodesSendkey
         */
        public function getSendkey() {
            return $this->sendkey ?: ($this->sendkey = new PVEVmidQemuNodeNodesSendkey($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $feature;

        /**
         * Get VmidQemuNodeNodesFeature
         * @return PVEVmidQemuNodeNodesFeature
         */
        public function getFeature() {
            return $this->feature ?: ($this->feature = new PVEVmidQemuNodeNodesFeature($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $clone;

        /**
         * Get VmidQemuNodeNodesClone
         * @return PVEVmidQemuNodeNodesClone
         */
        public function getClone() {
            return $this->clone ?: ($this->clone = new PVEVmidQemuNodeNodesClone($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $moveDisk;

        /**
         * Get VmidQemuNodeNodesMoveDisk
         * @return PVEVmidQemuNodeNodesMoveDisk
         */
        public function getMoveDisk() {
            return $this->moveDisk ?: ($this->moveDisk = new PVEVmidQemuNodeNodesMoveDisk($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $migrate;

        /**
         * Get VmidQemuNodeNodesMigrate
         * @return PVEVmidQemuNodeNodesMigrate
         */
        public function getMigrate() {
            return $this->migrate ?: ($this->migrate = new PVEVmidQemuNodeNodesMigrate($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $monitor;

        /**
         * Get VmidQemuNodeNodesMonitor
         * @return PVEVmidQemuNodeNodesMonitor
         */
        public function getMonitor() {
            return $this->monitor ?: ($this->monitor = new PVEVmidQemuNodeNodesMonitor($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $resize;

        /**
         * Get VmidQemuNodeNodesResize
         * @return PVEVmidQemuNodeNodesResize
         */
        public function getResize() {
            return $this->resize ?: ($this->resize = new PVEVmidQemuNodeNodesResize($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $snapshot;

        /**
         * Get VmidQemuNodeNodesSnapshot
         * @return PVEVmidQemuNodeNodesSnapshot
         */
        public function getSnapshot() {
            return $this->snapshot ?: ($this->snapshot = new PVEVmidQemuNodeNodesSnapshot($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $template;

        /**
         * Get VmidQemuNodeNodesTemplate
         * @return PVEVmidQemuNodeNodesTemplate
         */
        public function getTemplate() {
            return $this->template ?: ($this->template = new PVEVmidQemuNodeNodesTemplate($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $cloudinit;

        /**
         * Get VmidQemuNodeNodesCloudinit
         * @return PVEVmidQemuNodeNodesCloudinit
         */
        public function getCloudinit() {
            return $this->cloudinit ?: ($this->cloudinit = new PVEVmidQemuNodeNodesCloudinit($this->client, $this->node, $this->vmid));
        }

        /**
         * Destroy the VM and  all used/owned volumes. Removes any VM specific permissions and firewall rules
         * @param bool $destroy_unreferenced_disks If set, destroy additionally all disks not referenced in the config but with a matching VMID from all enabled storages.
         * @param bool $purge Remove VMID from configurations, like backup &amp; replication jobs and HA.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function deleteRest($destroy_unreferenced_disks = null, $purge = null, $skiplock = null) {
            $params = ['destroy-unreferenced-disks' => $destroy_unreferenced_disks,
                'purge' => $purge,
                'skiplock' => $skiplock];
            return $this->client->delete("/nodes/{$this->node}/qemu/{$this->vmid}", $params);
        }

        /**
         * Destroy the VM and  all used/owned volumes. Removes any VM specific permissions and firewall rules
         * @param bool $destroy_unreferenced_disks If set, destroy additionally all disks not referenced in the config but with a matching VMID from all enabled storages.
         * @param bool $purge Remove VMID from configurations, like backup &amp; replication jobs and HA.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function destroyVm($destroy_unreferenced_disks = null, $purge = null, $skiplock = null) {
            return $this->deleteRest($destroy_unreferenced_disks, $purge, $skiplock);
        }

        /**
         * Directory index
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}");
        }

        /**
         * Directory index
         * @return Result
         */
        public function vmdiridx() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesFirewall
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesFirewall {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * @ignore
         */
        private $rules;

        /**
         * Get FirewallVmidQemuNodeNodesRules
         * @return PVEFirewallVmidQemuNodeNodesRules
         */
        public function getRules() {
            return $this->rules ?: ($this->rules = new PVEFirewallVmidQemuNodeNodesRules($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $aliases;

        /**
         * Get FirewallVmidQemuNodeNodesAliases
         * @return PVEFirewallVmidQemuNodeNodesAliases
         */
        public function getAliases() {
            return $this->aliases ?: ($this->aliases = new PVEFirewallVmidQemuNodeNodesAliases($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $ipset;

        /**
         * Get FirewallVmidQemuNodeNodesIpset
         * @return PVEFirewallVmidQemuNodeNodesIpset
         */
        public function getIpset() {
            return $this->ipset ?: ($this->ipset = new PVEFirewallVmidQemuNodeNodesIpset($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $options;

        /**
         * Get FirewallVmidQemuNodeNodesOptions
         * @return PVEFirewallVmidQemuNodeNodesOptions
         */
        public function getOptions() {
            return $this->options ?: ($this->options = new PVEFirewallVmidQemuNodeNodesOptions($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $log;

        /**
         * Get FirewallVmidQemuNodeNodesLog
         * @return PVEFirewallVmidQemuNodeNodesLog
         */
        public function getLog() {
            return $this->log ?: ($this->log = new PVEFirewallVmidQemuNodeNodesLog($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $refs;

        /**
         * Get FirewallVmidQemuNodeNodesRefs
         * @return PVEFirewallVmidQemuNodeNodesRefs
         */
        public function getRefs() {
            return $this->refs ?: ($this->refs = new PVEFirewallVmidQemuNodeNodesRefs($this->client, $this->node, $this->vmid));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEFirewallVmidQemuNodeNodesRules
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidQemuNodeNodesRules {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get ItemRulesFirewallVmidQemuNodeNodesPos
         * @param pos
         * @return PVEItemRulesFirewallVmidQemuNodeNodesPos
         */
        public function get($pos) {
            return new PVEItemRulesFirewallVmidQemuNodeNodesPos($this->client, $this->node, $this->vmid, $pos);
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/rules");
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRules() {
            return $this->getRest();
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRest($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            $params = ['action' => $action,
                'type' => $type,
                'comment' => $comment,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'pos' => $pos,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/rules", $params);
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRule($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            return $this->createRest($action, $type, $comment, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $pos, $proto, $source, $sport);
        }

    }

    /**
     * Class PVEItemRulesFirewallVmidQemuNodeNodesPos
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemRulesFirewallVmidQemuNodeNodesPos {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $pos;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $pos) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->pos = $pos;
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/rules/{$this->pos}", $params);
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRule($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/rules/{$this->pos}");
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRule() {
            return $this->getRest();
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function setRest($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            $params = ['action' => $action,
                'comment' => $comment,
                'delete' => $delete,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'moveto' => $moveto,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport,
                'type' => $type];
            return $this->client->set("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/rules/{$this->pos}", $params);
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function updateRule($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            return $this->setRest($action, $comment, $delete, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $moveto, $proto, $source, $sport, $type);
        }

    }

    /**
     * Class PVEFirewallVmidQemuNodeNodesAliases
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidQemuNodeNodesAliases {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get ItemAliasesFirewallVmidQemuNodeNodesName
         * @param name
         * @return PVEItemAliasesFirewallVmidQemuNodeNodesName
         */
        public function get($name) {
            return new PVEItemAliasesFirewallVmidQemuNodeNodesName($this->client, $this->node, $this->vmid, $name);
        }

        /**
         * List aliases
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/aliases");
        }

        /**
         * List aliases
         * @return Result
         */
        public function getAliases() {
            return $this->getRest();
        }

        /**
         * Create IP or Network Alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $name Alias name.
         * @param string $comment 
         * @return Result
         */
        public function createRest($cidr, $name, $comment = null) {
            $params = ['cidr' => $cidr,
                'name' => $name,
                'comment' => $comment];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/aliases", $params);
        }

        /**
         * Create IP or Network Alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $name Alias name.
         * @param string $comment 
         * @return Result
         */
        public function createAlias($cidr, $name, $comment = null) {
            return $this->createRest($cidr, $name, $comment);
        }

    }

    /**
     * Class PVEItemAliasesFirewallVmidQemuNodeNodesName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemAliasesFirewallVmidQemuNodeNodesName {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $name) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->name = $name;
        }

        /**
         * Remove IP or Network alias.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/aliases/{$this->name}", $params);
        }

        /**
         * Remove IP or Network alias.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function removeAlias($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Read alias.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/aliases/{$this->name}");
        }

        /**
         * Read alias.
         * @return Result
         */
        public function readAlias() {
            return $this->getRest();
        }

        /**
         * Update IP or Network alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing alias.
         * @return Result
         */
        public function setRest($cidr, $comment = null, $digest = null, $rename = null) {
            $params = ['cidr' => $cidr,
                'comment' => $comment,
                'digest' => $digest,
                'rename' => $rename];
            return $this->client->set("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/aliases/{$this->name}", $params);
        }

        /**
         * Update IP or Network alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing alias.
         * @return Result
         */
        public function updateAlias($cidr, $comment = null, $digest = null, $rename = null) {
            return $this->setRest($cidr, $comment, $digest, $rename);
        }

    }

    /**
     * Class PVEFirewallVmidQemuNodeNodesIpset
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidQemuNodeNodesIpset {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get ItemIpsetFirewallVmidQemuNodeNodesName
         * @param name
         * @return PVEItemIpsetFirewallVmidQemuNodeNodesName
         */
        public function get($name) {
            return new PVEItemIpsetFirewallVmidQemuNodeNodesName($this->client, $this->node, $this->vmid, $name);
        }

        /**
         * List IPSets
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/ipset");
        }

        /**
         * List IPSets
         * @return Result
         */
        public function ipsetIndex() {
            return $this->getRest();
        }

        /**
         * Create new IPSet
         * @param string $name IP set name.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing IPSet. You can set 'rename' to the same value as 'name' to update the 'comment' of an existing IPSet.
         * @return Result
         */
        public function createRest($name, $comment = null, $digest = null, $rename = null) {
            $params = ['name' => $name,
                'comment' => $comment,
                'digest' => $digest,
                'rename' => $rename];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/ipset", $params);
        }

        /**
         * Create new IPSet
         * @param string $name IP set name.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing IPSet. You can set 'rename' to the same value as 'name' to update the 'comment' of an existing IPSet.
         * @return Result
         */
        public function createIpset($name, $comment = null, $digest = null, $rename = null) {
            return $this->createRest($name, $comment, $digest, $rename);
        }

    }

    /**
     * Class PVEItemIpsetFirewallVmidQemuNodeNodesName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemIpsetFirewallVmidQemuNodeNodesName {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $name) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->name = $name;
        }

        /**
         * Get ItemNameIpsetFirewallVmidQemuNodeNodesCidr
         * @param cidr
         * @return PVEItemNameIpsetFirewallVmidQemuNodeNodesCidr
         */
        public function get($cidr) {
            return new PVEItemNameIpsetFirewallVmidQemuNodeNodesCidr($this->client, $this->node, $this->vmid, $this->name, $cidr);
        }

        /**
         * Delete IPSet
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/ipset/{$this->name}");
        }

        /**
         * Delete IPSet
         * @return Result
         */
        public function deleteIpset() {
            return $this->deleteRest();
        }

        /**
         * List IPSet content
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/ipset/{$this->name}");
        }

        /**
         * List IPSet content
         * @return Result
         */
        public function getIpset() {
            return $this->getRest();
        }

        /**
         * Add IP or Network to IPSet.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param bool $nomatch 
         * @return Result
         */
        public function createRest($cidr, $comment = null, $nomatch = null) {
            $params = ['cidr' => $cidr,
                'comment' => $comment,
                'nomatch' => $nomatch];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/ipset/{$this->name}", $params);
        }

        /**
         * Add IP or Network to IPSet.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param bool $nomatch 
         * @return Result
         */
        public function createIp($cidr, $comment = null, $nomatch = null) {
            return $this->createRest($cidr, $comment, $nomatch);
        }

    }

    /**
     * Class PVEItemNameIpsetFirewallVmidQemuNodeNodesCidr
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemNameIpsetFirewallVmidQemuNodeNodesCidr {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $cidr;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $name, $cidr) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->name = $name;
            $this->cidr = $cidr;
        }

        /**
         * Remove IP or Network from IPSet.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/ipset/{$this->name}/{$this->cidr}", $params);
        }

        /**
         * Remove IP or Network from IPSet.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function removeIp($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Read IP or Network settings from IPSet.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/ipset/{$this->name}/{$this->cidr}");
        }

        /**
         * Read IP or Network settings from IPSet.
         * @return Result
         */
        public function readIp() {
            return $this->getRest();
        }

        /**
         * Update IP or Network settings
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $nomatch 
         * @return Result
         */
        public function setRest($comment = null, $digest = null, $nomatch = null) {
            $params = ['comment' => $comment,
                'digest' => $digest,
                'nomatch' => $nomatch];
            return $this->client->set("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/ipset/{$this->name}/{$this->cidr}", $params);
        }

        /**
         * Update IP or Network settings
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $nomatch 
         * @return Result
         */
        public function updateIp($comment = null, $digest = null, $nomatch = null) {
            return $this->setRest($comment, $digest, $nomatch);
        }

    }

    /**
     * Class PVEFirewallVmidQemuNodeNodesOptions
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidQemuNodeNodesOptions {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get VM firewall options.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/options");
        }

        /**
         * Get VM firewall options.
         * @return Result
         */
        public function getOptions() {
            return $this->getRest();
        }

        /**
         * Set Firewall options.
         * @param string $delete A list of settings you want to delete.
         * @param bool $dhcp Enable DHCP.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $enable Enable/disable firewall rules.
         * @param bool $ipfilter Enable default IP filters. This is equivalent to adding an empty ipfilter-net&amp;lt;id&amp;gt; ipset for every interface. Such ipsets implicitly contain sane default restrictions such as restricting IPv6 link local addresses to the one derived from the interface's MAC address. For containers the configured IP addresses will be implicitly added.
         * @param string $log_level_in Log level for incoming traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $log_level_out Log level for outgoing traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param bool $macfilter Enable/disable MAC address filter.
         * @param bool $ndp Enable NDP (Neighbor Discovery Protocol).
         * @param string $policy_in Input policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param string $policy_out Output policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param bool $radv Allow sending Router Advertisement.
         * @return Result
         */
        public function setRest($delete = null, $dhcp = null, $digest = null, $enable = null, $ipfilter = null, $log_level_in = null, $log_level_out = null, $macfilter = null, $ndp = null, $policy_in = null, $policy_out = null, $radv = null) {
            $params = ['delete' => $delete,
                'dhcp' => $dhcp,
                'digest' => $digest,
                'enable' => $enable,
                'ipfilter' => $ipfilter,
                'log_level_in' => $log_level_in,
                'log_level_out' => $log_level_out,
                'macfilter' => $macfilter,
                'ndp' => $ndp,
                'policy_in' => $policy_in,
                'policy_out' => $policy_out,
                'radv' => $radv];
            return $this->client->set("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/options", $params);
        }

        /**
         * Set Firewall options.
         * @param string $delete A list of settings you want to delete.
         * @param bool $dhcp Enable DHCP.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $enable Enable/disable firewall rules.
         * @param bool $ipfilter Enable default IP filters. This is equivalent to adding an empty ipfilter-net&amp;lt;id&amp;gt; ipset for every interface. Such ipsets implicitly contain sane default restrictions such as restricting IPv6 link local addresses to the one derived from the interface's MAC address. For containers the configured IP addresses will be implicitly added.
         * @param string $log_level_in Log level for incoming traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $log_level_out Log level for outgoing traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param bool $macfilter Enable/disable MAC address filter.
         * @param bool $ndp Enable NDP (Neighbor Discovery Protocol).
         * @param string $policy_in Input policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param string $policy_out Output policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param bool $radv Allow sending Router Advertisement.
         * @return Result
         */
        public function setOptions($delete = null, $dhcp = null, $digest = null, $enable = null, $ipfilter = null, $log_level_in = null, $log_level_out = null, $macfilter = null, $ndp = null, $policy_in = null, $policy_out = null, $radv = null) {
            return $this->setRest($delete, $dhcp, $digest, $enable, $ipfilter, $log_level_in, $log_level_out, $macfilter, $ndp, $policy_in, $policy_out, $radv);
        }

    }

    /**
     * Class PVEFirewallVmidQemuNodeNodesLog
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidQemuNodeNodesLog {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Read firewall log
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function getRest($limit = null, $start = null) {
            $params = ['limit' => $limit,
                'start' => $start];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/log", $params);
        }

        /**
         * Read firewall log
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function log($limit = null, $start = null) {
            return $this->getRest($limit, $start);
        }

    }

    /**
     * Class PVEFirewallVmidQemuNodeNodesRefs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidQemuNodeNodesRefs {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Lists possible IPSet/Alias reference which are allowed in source/dest properties.
         * @param string $type Only list references of specified type.
         *   Enum: alias,ipset
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/firewall/refs", $params);
        }

        /**
         * Lists possible IPSet/Alias reference which are allowed in source/dest properties.
         * @param string $type Only list references of specified type.
         *   Enum: alias,ipset
         * @return Result
         */
        public function refs($type = null) {
            return $this->getRest($type);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesAgent
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesAgent {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * @ignore
         */
        private $fsfreeze_Freeze;

        /**
         * Get AgentVmidQemuNodeNodesFsfreeze_Freeze
         * @return PVEAgentVmidQemuNodeNodesFsfreeze_Freeze
         */
        public function getFsfreeze_Freeze() {
            return $this->fsfreeze_Freeze ?: ($this->fsfreeze_Freeze = new PVEAgentVmidQemuNodeNodesFsfreeze_Freeze($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $fsfreeze_Status;

        /**
         * Get AgentVmidQemuNodeNodesFsfreeze_Status
         * @return PVEAgentVmidQemuNodeNodesFsfreeze_Status
         */
        public function getFsfreeze_Status() {
            return $this->fsfreeze_Status ?: ($this->fsfreeze_Status = new PVEAgentVmidQemuNodeNodesFsfreeze_Status($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $fsfreeze_Thaw;

        /**
         * Get AgentVmidQemuNodeNodesFsfreeze_Thaw
         * @return PVEAgentVmidQemuNodeNodesFsfreeze_Thaw
         */
        public function getFsfreeze_Thaw() {
            return $this->fsfreeze_Thaw ?: ($this->fsfreeze_Thaw = new PVEAgentVmidQemuNodeNodesFsfreeze_Thaw($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $fstrim;

        /**
         * Get AgentVmidQemuNodeNodesFstrim
         * @return PVEAgentVmidQemuNodeNodesFstrim
         */
        public function getFstrim() {
            return $this->fstrim ?: ($this->fstrim = new PVEAgentVmidQemuNodeNodesFstrim($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $get_Fsinfo;

        /**
         * Get AgentVmidQemuNodeNodesGet_Fsinfo
         * @return PVEAgentVmidQemuNodeNodesGet_Fsinfo
         */
        public function getGet_Fsinfo() {
            return $this->get_Fsinfo ?: ($this->get_Fsinfo = new PVEAgentVmidQemuNodeNodesGet_Fsinfo($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $get_Host_Name;

        /**
         * Get AgentVmidQemuNodeNodesGet_Host_Name
         * @return PVEAgentVmidQemuNodeNodesGet_Host_Name
         */
        public function getGet_Host_Name() {
            return $this->get_Host_Name ?: ($this->get_Host_Name = new PVEAgentVmidQemuNodeNodesGet_Host_Name($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $get_Memory_Block_Info;

        /**
         * Get AgentVmidQemuNodeNodesGet_Memory_Block_Info
         * @return PVEAgentVmidQemuNodeNodesGet_Memory_Block_Info
         */
        public function getGet_Memory_Block_Info() {
            return $this->get_Memory_Block_Info ?: ($this->get_Memory_Block_Info = new PVEAgentVmidQemuNodeNodesGet_Memory_Block_Info($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $get_Memory_Blocks;

        /**
         * Get AgentVmidQemuNodeNodesGet_Memory_Blocks
         * @return PVEAgentVmidQemuNodeNodesGet_Memory_Blocks
         */
        public function getGet_Memory_Blocks() {
            return $this->get_Memory_Blocks ?: ($this->get_Memory_Blocks = new PVEAgentVmidQemuNodeNodesGet_Memory_Blocks($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $get_Osinfo;

        /**
         * Get AgentVmidQemuNodeNodesGet_Osinfo
         * @return PVEAgentVmidQemuNodeNodesGet_Osinfo
         */
        public function getGet_Osinfo() {
            return $this->get_Osinfo ?: ($this->get_Osinfo = new PVEAgentVmidQemuNodeNodesGet_Osinfo($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $get_Time;

        /**
         * Get AgentVmidQemuNodeNodesGet_Time
         * @return PVEAgentVmidQemuNodeNodesGet_Time
         */
        public function getGet_Time() {
            return $this->get_Time ?: ($this->get_Time = new PVEAgentVmidQemuNodeNodesGet_Time($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $get_Timezone;

        /**
         * Get AgentVmidQemuNodeNodesGet_Timezone
         * @return PVEAgentVmidQemuNodeNodesGet_Timezone
         */
        public function getGet_Timezone() {
            return $this->get_Timezone ?: ($this->get_Timezone = new PVEAgentVmidQemuNodeNodesGet_Timezone($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $get_Users;

        /**
         * Get AgentVmidQemuNodeNodesGet_Users
         * @return PVEAgentVmidQemuNodeNodesGet_Users
         */
        public function getGet_Users() {
            return $this->get_Users ?: ($this->get_Users = new PVEAgentVmidQemuNodeNodesGet_Users($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $get_Vcpus;

        /**
         * Get AgentVmidQemuNodeNodesGet_Vcpus
         * @return PVEAgentVmidQemuNodeNodesGet_Vcpus
         */
        public function getGet_Vcpus() {
            return $this->get_Vcpus ?: ($this->get_Vcpus = new PVEAgentVmidQemuNodeNodesGet_Vcpus($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $info;

        /**
         * Get AgentVmidQemuNodeNodesInfo
         * @return PVEAgentVmidQemuNodeNodesInfo
         */
        public function getInfo() {
            return $this->info ?: ($this->info = new PVEAgentVmidQemuNodeNodesInfo($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $network_Get_Interfaces;

        /**
         * Get AgentVmidQemuNodeNodesNetwork_Get_Interfaces
         * @return PVEAgentVmidQemuNodeNodesNetwork_Get_Interfaces
         */
        public function getNetwork_Get_Interfaces() {
            return $this->network_Get_Interfaces ?: ($this->network_Get_Interfaces = new PVEAgentVmidQemuNodeNodesNetwork_Get_Interfaces($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $ping;

        /**
         * Get AgentVmidQemuNodeNodesPing
         * @return PVEAgentVmidQemuNodeNodesPing
         */
        public function getPing() {
            return $this->ping ?: ($this->ping = new PVEAgentVmidQemuNodeNodesPing($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $shutdown;

        /**
         * Get AgentVmidQemuNodeNodesShutdown
         * @return PVEAgentVmidQemuNodeNodesShutdown
         */
        public function getShutdown() {
            return $this->shutdown ?: ($this->shutdown = new PVEAgentVmidQemuNodeNodesShutdown($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $suspend_Disk;

        /**
         * Get AgentVmidQemuNodeNodesSuspend_Disk
         * @return PVEAgentVmidQemuNodeNodesSuspend_Disk
         */
        public function getSuspend_Disk() {
            return $this->suspend_Disk ?: ($this->suspend_Disk = new PVEAgentVmidQemuNodeNodesSuspend_Disk($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $suspend_Hybrid;

        /**
         * Get AgentVmidQemuNodeNodesSuspend_Hybrid
         * @return PVEAgentVmidQemuNodeNodesSuspend_Hybrid
         */
        public function getSuspend_Hybrid() {
            return $this->suspend_Hybrid ?: ($this->suspend_Hybrid = new PVEAgentVmidQemuNodeNodesSuspend_Hybrid($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $suspend_Ram;

        /**
         * Get AgentVmidQemuNodeNodesSuspend_Ram
         * @return PVEAgentVmidQemuNodeNodesSuspend_Ram
         */
        public function getSuspend_Ram() {
            return $this->suspend_Ram ?: ($this->suspend_Ram = new PVEAgentVmidQemuNodeNodesSuspend_Ram($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $set_User_Password;

        /**
         * Get AgentVmidQemuNodeNodesSet_User_Password
         * @return PVEAgentVmidQemuNodeNodesSet_User_Password
         */
        public function getSet_User_Password() {
            return $this->set_User_Password ?: ($this->set_User_Password = new PVEAgentVmidQemuNodeNodesSet_User_Password($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $exec;

        /**
         * Get AgentVmidQemuNodeNodesExec
         * @return PVEAgentVmidQemuNodeNodesExec
         */
        public function getExec() {
            return $this->exec ?: ($this->exec = new PVEAgentVmidQemuNodeNodesExec($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $exec_Status;

        /**
         * Get AgentVmidQemuNodeNodesExec_Status
         * @return PVEAgentVmidQemuNodeNodesExec_Status
         */
        public function getExec_Status() {
            return $this->exec_Status ?: ($this->exec_Status = new PVEAgentVmidQemuNodeNodesExec_Status($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $file_Read;

        /**
         * Get AgentVmidQemuNodeNodesFile_Read
         * @return PVEAgentVmidQemuNodeNodesFile_Read
         */
        public function getFile_Read() {
            return $this->file_Read ?: ($this->file_Read = new PVEAgentVmidQemuNodeNodesFile_Read($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $file_Write;

        /**
         * Get AgentVmidQemuNodeNodesFile_Write
         * @return PVEAgentVmidQemuNodeNodesFile_Write
         */
        public function getFile_Write() {
            return $this->file_Write ?: ($this->file_Write = new PVEAgentVmidQemuNodeNodesFile_Write($this->client, $this->node, $this->vmid));
        }

        /**
         * Qemu Agent command index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent");
        }

        /**
         * Qemu Agent command index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Execute Qemu Guest Agent commands.
         * @param string $command The QGA command.
         *   Enum: fsfreeze-freeze,fsfreeze-status,fsfreeze-thaw,fstrim,get-fsinfo,get-host-name,get-memory-block-info,get-memory-blocks,get-osinfo,get-time,get-timezone,get-users,get-vcpus,info,network-get-interfaces,ping,shutdown,suspend-disk,suspend-hybrid,suspend-ram
         * @return Result
         */
        public function createRest($command) {
            $params = ['command' => $command];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent", $params);
        }

        /**
         * Execute Qemu Guest Agent commands.
         * @param string $command The QGA command.
         *   Enum: fsfreeze-freeze,fsfreeze-status,fsfreeze-thaw,fstrim,get-fsinfo,get-host-name,get-memory-block-info,get-memory-blocks,get-osinfo,get-time,get-timezone,get-users,get-vcpus,info,network-get-interfaces,ping,shutdown,suspend-disk,suspend-hybrid,suspend-ram
         * @return Result
         */
        public function agent($command) {
            return $this->createRest($command);
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesFsfreeze_Freeze
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesFsfreeze_Freeze {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute fsfreeze-freeze.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/fsfreeze-freeze");
        }

        /**
         * Execute fsfreeze-freeze.
         * @return Result
         */
        public function fsfreeze_Freeze() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesFsfreeze_Status
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesFsfreeze_Status {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute fsfreeze-status.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/fsfreeze-status");
        }

        /**
         * Execute fsfreeze-status.
         * @return Result
         */
        public function fsfreeze_Status() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesFsfreeze_Thaw
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesFsfreeze_Thaw {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute fsfreeze-thaw.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/fsfreeze-thaw");
        }

        /**
         * Execute fsfreeze-thaw.
         * @return Result
         */
        public function fsfreeze_Thaw() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesFstrim
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesFstrim {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute fstrim.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/fstrim");
        }

        /**
         * Execute fstrim.
         * @return Result
         */
        public function fstrim() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesGet_Fsinfo
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesGet_Fsinfo {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute get-fsinfo.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/get-fsinfo");
        }

        /**
         * Execute get-fsinfo.
         * @return Result
         */
        public function get_Fsinfo() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesGet_Host_Name
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesGet_Host_Name {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute get-host-name.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/get-host-name");
        }

        /**
         * Execute get-host-name.
         * @return Result
         */
        public function get_Host_Name() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesGet_Memory_Block_Info
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesGet_Memory_Block_Info {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute get-memory-block-info.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/get-memory-block-info");
        }

        /**
         * Execute get-memory-block-info.
         * @return Result
         */
        public function get_Memory_Block_Info() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesGet_Memory_Blocks
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesGet_Memory_Blocks {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute get-memory-blocks.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/get-memory-blocks");
        }

        /**
         * Execute get-memory-blocks.
         * @return Result
         */
        public function get_Memory_Blocks() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesGet_Osinfo
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesGet_Osinfo {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute get-osinfo.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/get-osinfo");
        }

        /**
         * Execute get-osinfo.
         * @return Result
         */
        public function get_Osinfo() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesGet_Time
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesGet_Time {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute get-time.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/get-time");
        }

        /**
         * Execute get-time.
         * @return Result
         */
        public function get_Time() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesGet_Timezone
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesGet_Timezone {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute get-timezone.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/get-timezone");
        }

        /**
         * Execute get-timezone.
         * @return Result
         */
        public function get_Timezone() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesGet_Users
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesGet_Users {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute get-users.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/get-users");
        }

        /**
         * Execute get-users.
         * @return Result
         */
        public function get_Users() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesGet_Vcpus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesGet_Vcpus {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute get-vcpus.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/get-vcpus");
        }

        /**
         * Execute get-vcpus.
         * @return Result
         */
        public function get_Vcpus() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesInfo
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesInfo {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute info.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/info");
        }

        /**
         * Execute info.
         * @return Result
         */
        public function info() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesNetwork_Get_Interfaces
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesNetwork_Get_Interfaces {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute network-get-interfaces.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/network-get-interfaces");
        }

        /**
         * Execute network-get-interfaces.
         * @return Result
         */
        public function network_Get_Interfaces() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesPing
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesPing {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute ping.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/ping");
        }

        /**
         * Execute ping.
         * @return Result
         */
        public function ping() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesShutdown
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesShutdown {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute shutdown.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/shutdown");
        }

        /**
         * Execute shutdown.
         * @return Result
         */
        public function shutdown() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesSuspend_Disk
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesSuspend_Disk {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute suspend-disk.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/suspend-disk");
        }

        /**
         * Execute suspend-disk.
         * @return Result
         */
        public function suspend_Disk() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesSuspend_Hybrid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesSuspend_Hybrid {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute suspend-hybrid.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/suspend-hybrid");
        }

        /**
         * Execute suspend-hybrid.
         * @return Result
         */
        public function suspend_Hybrid() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesSuspend_Ram
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesSuspend_Ram {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute suspend-ram.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/suspend-ram");
        }

        /**
         * Execute suspend-ram.
         * @return Result
         */
        public function suspend_Ram() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesSet_User_Password
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesSet_User_Password {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Sets the password for the given user to the given password
         * @param string $password The new password.
         * @param string $username The user to set the password for.
         * @param bool $crypted set to 1 if the password has already been passed through crypt()
         * @return Result
         */
        public function createRest($password, $username, $crypted = null) {
            $params = ['password' => $password,
                'username' => $username,
                'crypted' => $crypted];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/set-user-password", $params);
        }

        /**
         * Sets the password for the given user to the given password
         * @param string $password The new password.
         * @param string $username The user to set the password for.
         * @param bool $crypted set to 1 if the password has already been passed through crypt()
         * @return Result
         */
        public function set_User_Password($password, $username, $crypted = null) {
            return $this->createRest($password, $username, $crypted);
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesExec
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesExec {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Executes the given command in the vm via the guest-agent and returns an object with the pid.
         * @param string $command The command as a list of program + arguments
         * @param string $input_data Data to pass as 'input-data' to the guest. Usually treated as STDIN to 'command'.
         * @return Result
         */
        public function createRest($command = null, $input_data = null) {
            $params = ['command' => $command,
                'input-data' => $input_data];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/exec", $params);
        }

        /**
         * Executes the given command in the vm via the guest-agent and returns an object with the pid.
         * @param string $command The command as a list of program + arguments
         * @param string $input_data Data to pass as 'input-data' to the guest. Usually treated as STDIN to 'command'.
         * @return Result
         */
        public function exec($command = null, $input_data = null) {
            return $this->createRest($command, $input_data);
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesExec_Status
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesExec_Status {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Gets the status of the given pid started by the guest-agent
         * @param int $pid The PID to query
         * @return Result
         */
        public function getRest($pid) {
            $params = ['pid' => $pid];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/exec-status", $params);
        }

        /**
         * Gets the status of the given pid started by the guest-agent
         * @param int $pid The PID to query
         * @return Result
         */
        public function exec_Status($pid) {
            return $this->getRest($pid);
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesFile_Read
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesFile_Read {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Reads the given file via guest agent. Is limited to 16777216 bytes.
         * @param string $file The path to the file
         * @return Result
         */
        public function getRest($file) {
            $params = ['file' => $file];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/agent/file-read", $params);
        }

        /**
         * Reads the given file via guest agent. Is limited to 16777216 bytes.
         * @param string $file The path to the file
         * @return Result
         */
        public function file_Read($file) {
            return $this->getRest($file);
        }

    }

    /**
     * Class PVEAgentVmidQemuNodeNodesFile_Write
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAgentVmidQemuNodeNodesFile_Write {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Writes the given file via guest agent.
         * @param string $content The content to write into the file.
         * @param string $file The path to the file.
         * @return Result
         */
        public function createRest($content, $file) {
            $params = ['content' => $content,
                'file' => $file];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/agent/file-write", $params);
        }

        /**
         * Writes the given file via guest agent.
         * @param string $content The content to write into the file.
         * @param string $file The path to the file.
         * @return Result
         */
        public function file_Write($content, $file) {
            return $this->createRest($content, $file);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesRrd
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesRrd {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Read VM RRD statistics (returns PNG)
         * @param string $ds The list of datasources you want to display.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function getRest($ds, $timeframe, $cf = null) {
            $params = ['ds' => $ds,
                'timeframe' => $timeframe,
                'cf' => $cf];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/rrd", $params);
        }

        /**
         * Read VM RRD statistics (returns PNG)
         * @param string $ds The list of datasources you want to display.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function rrd($ds, $timeframe, $cf = null) {
            return $this->getRest($ds, $timeframe, $cf);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesRrddata
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesRrddata {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Read VM RRD statistics
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function getRest($timeframe, $cf = null) {
            $params = ['timeframe' => $timeframe,
                'cf' => $cf];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/rrddata", $params);
        }

        /**
         * Read VM RRD statistics
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function rrddata($timeframe, $cf = null) {
            return $this->getRest($timeframe, $cf);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesConfig
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesConfig {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get the virtual machine configuration with pending configuration changes applied. Set the 'current' parameter to get the current configuration instead.
         * @param bool $current Get current values (instead of pending values).
         * @param string $snapshot Fetch config values from given snapshot.
         * @return Result
         */
        public function getRest($current = null, $snapshot = null) {
            $params = ['current' => $current,
                'snapshot' => $snapshot];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/config", $params);
        }

        /**
         * Get the virtual machine configuration with pending configuration changes applied. Set the 'current' parameter to get the current configuration instead.
         * @param bool $current Get current values (instead of pending values).
         * @param string $snapshot Fetch config values from given snapshot.
         * @return Result
         */
        public function vmConfig($current = null, $snapshot = null) {
            return $this->getRest($current, $snapshot);
        }

        /**
         * Set virtual machine options (asynchrounous API).
         * @param bool $acpi Enable/disable ACPI.
         * @param string $agent Enable/disable Qemu GuestAgent and its properties.
         * @param string $arch Virtual processor architecture. Defaults to the host.
         *   Enum: x86_64,aarch64
         * @param string $args Arbitrary arguments passed to kvm.
         * @param string $audio0 Configure a audio device, useful in combination with QXL/Spice.
         * @param bool $autostart Automatic restart after crash (currently ignored).
         * @param int $background_delay Time to wait for the task to finish. We return 'null' if the task finish within that time.
         * @param int $balloon Amount of target RAM for the VM in MB. Using zero disables the ballon driver.
         * @param string $bios Select BIOS implementation.
         *   Enum: seabios,ovmf
         * @param string $boot Specify guest boot order. Use with 'order=', usage with no key or 'legacy=' is deprecated.
         * @param string $bootdisk Enable booting from specified disk. Deprecated: Use 'boot: order=foo;bar' instead.
         * @param string $cdrom This is an alias for option -ide2
         * @param string $cicustom cloud-init: Specify custom files to replace the automatically generated ones at start.
         * @param string $cipassword cloud-init: Password to assign the user. Using this is generally not recommended. Use ssh keys instead. Also note that older cloud-init versions do not support hashed passwords.
         * @param string $citype Specifies the cloud-init configuration format. The default depends on the configured operating system type (`ostype`. We use the `nocloud` format for Linux, and `configdrive2` for windows.
         *   Enum: configdrive2,nocloud,opennebula
         * @param string $ciuser cloud-init: User name to change ssh keys and password for instead of the image's configured default user.
         * @param int $cores The number of cores per socket.
         * @param string $cpu Emulated CPU type.
         * @param float $cpulimit Limit of CPU usage.
         * @param int $cpuunits CPU weight for a VM.
         * @param string $delete A list of settings you want to delete.
         * @param string $description Description for the VM. Shown in the web-interface VM's summary. This is saved as comment inside the configuration file.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $efidisk0 Configure a Disk for storing EFI vars. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume. Note that SIZE_IN_GiB is ignored here and that the default EFI vars are copied to the volume instead.
         * @param bool $force Force physical removal. Without this, we simple remove the disk from the config file and create an additional configuration entry called 'unused[n]', which contains the volume ID. Unlink of unused[n] always cause physical removal.
         * @param bool $freeze Freeze CPU at startup (use 'c' monitor command to start execution).
         * @param string $hookscript Script that will be executed during various steps in the vms lifetime.
         * @param array $hostpciN Map host PCI devices into guest.
         * @param string $hotplug Selectively enable hotplug features. This is a comma separated list of hotplug features: 'network', 'disk', 'cpu', 'memory' and 'usb'. Use '0' to disable hotplug completely. Value '1' is an alias for the default 'network,disk,usb'.
         * @param string $hugepages Enable/disable hugepages memory.
         *   Enum: any,2,1024
         * @param array $ideN Use volume as IDE hard disk or CD-ROM (n is 0 to 3). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $ipconfigN cloud-init: Specify IP addresses and gateways for the corresponding interface.  IP addresses use CIDR notation, gateways are optional but need an IP of the same type specified.  The special string 'dhcp' can be used for IP addresses to use DHCP, in which case no explicit gateway should be provided. For IPv6 the special string 'auto' can be used to use stateless autoconfiguration. This requires cloud-init 19.4 or newer.  If cloud-init is enabled and neither an IPv4 nor an IPv6 address is specified, it defaults to using dhcp on IPv4. 
         * @param string $ivshmem Inter-VM shared memory. Useful for direct communication between VMs, or to the host.
         * @param bool $keephugepages Use together with hugepages. If enabled, hugepages will not not be deleted after VM shutdown and can be used for subsequent starts.
         * @param string $keyboard Keybord layout for vnc server. Default is read from the '/etc/pve/datacenter.cfg' configuration file.It should not be necessary to set it.
         *   Enum: de,de-ch,da,en-gb,en-us,es,fi,fr,fr-be,fr-ca,fr-ch,hu,is,it,ja,lt,mk,nl,no,pl,pt,pt-br,sv,sl,tr
         * @param bool $kvm Enable/disable KVM hardware virtualization.
         * @param bool $localtime Set the real time clock to local time. This is enabled by default if ostype indicates a Microsoft OS.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,clone,create,migrate,rollback,snapshot,snapshot-delete,suspending,suspended
         * @param string $machine Specifies the Qemu machine type.
         * @param int $memory Amount of RAM for the VM in MB. This is the maximum available memory when you use the balloon device.
         * @param float $migrate_downtime Set maximum tolerated downtime (in seconds) for migrations.
         * @param int $migrate_speed Set maximum speed (in MB/s) for migrations. Value 0 is no limit.
         * @param string $name Set a name for the VM. Only used on the configuration web interface.
         * @param string $nameserver cloud-init: Sets DNS server IP address for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $netN Specify network devices.
         * @param bool $numa Enable/disable NUMA.
         * @param array $numaN NUMA topology.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype Specify guest operating system.
         *   Enum: other,wxp,w2k,w2k3,w2k8,wvista,win7,win8,win10,l24,l26,solaris
         * @param array $parallelN Map host parallel devices (n is 0 to 2).
         * @param bool $protection Sets the protection flag of the VM. This will disable the remove VM and remove disk operations.
         * @param bool $reboot Allow reboot. If set to '0' the VM exit on reboot.
         * @param string $revert Revert a pending change.
         * @param string $rng0 Configure a VirtIO-based Random Number Generator.
         * @param array $sataN Use volume as SATA hard disk or CD-ROM (n is 0 to 5). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $scsiN Use volume as SCSI hard disk or CD-ROM (n is 0 to 30). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $scsihw SCSI controller model
         *   Enum: lsi,lsi53c810,virtio-scsi-pci,virtio-scsi-single,megasas,pvscsi
         * @param string $searchdomain cloud-init: Sets DNS search domains for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $serialN Create a serial device inside the VM (n is 0 to 3)
         * @param int $shares Amount of memory shares for auto-ballooning. The larger the number is, the more memory this VM gets. Number is relative to weights of all other running VMs. Using zero disables auto-ballooning. Auto-ballooning is done by pvestatd.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param string $smbios1 Specify SMBIOS type 1 fields.
         * @param int $smp The number of CPUs. Please use option -sockets instead.
         * @param int $sockets The number of CPU sockets.
         * @param string $spice_enhancements Configure additional enhancements for SPICE.
         * @param string $sshkeys cloud-init: Setup public SSH keys (one key per line, OpenSSH format).
         * @param string $startdate Set the initial date of the real time clock. Valid format for date are:'now' or '2006-06-17T16:01:21' or '2006-06-17'.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param bool $tablet Enable/disable the USB tablet device.
         * @param string $tags Tags of the VM. This is only meta information.
         * @param bool $tdf Enable/disable time drift fix.
         * @param bool $template Enable/disable Template.
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @param array $usbN Configure an USB device (n is 0 to 4).
         * @param int $vcpus Number of hotplugged vcpus.
         * @param string $vga Configure the VGA hardware.
         * @param array $virtioN Use volume as VIRTIO hard disk (n is 0 to 15). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $vmgenid Set VM Generation ID. Use '1' to autogenerate on create or update, pass '0' to disable explicitly.
         * @param string $vmstatestorage Default storage for VM state volumes/files.
         * @param string $watchdog Create a virtual hardware watchdog device.
         * @return Result
         */
        public function createRest($acpi = null, $agent = null, $arch = null, $args = null, $audio0 = null, $autostart = null, $background_delay = null, $balloon = null, $bios = null, $boot = null, $bootdisk = null, $cdrom = null, $cicustom = null, $cipassword = null, $citype = null, $ciuser = null, $cores = null, $cpu = null, $cpulimit = null, $cpuunits = null, $delete = null, $description = null, $digest = null, $efidisk0 = null, $force = null, $freeze = null, $hookscript = null, $hostpciN = null, $hotplug = null, $hugepages = null, $ideN = null, $ipconfigN = null, $ivshmem = null, $keephugepages = null, $keyboard = null, $kvm = null, $localtime = null, $lock = null, $machine = null, $memory = null, $migrate_downtime = null, $migrate_speed = null, $name = null, $nameserver = null, $netN = null, $numa = null, $numaN = null, $onboot = null, $ostype = null, $parallelN = null, $protection = null, $reboot = null, $revert = null, $rng0 = null, $sataN = null, $scsiN = null, $scsihw = null, $searchdomain = null, $serialN = null, $shares = null, $skiplock = null, $smbios1 = null, $smp = null, $sockets = null, $spice_enhancements = null, $sshkeys = null, $startdate = null, $startup = null, $tablet = null, $tags = null, $tdf = null, $template = null, $unusedN = null, $usbN = null, $vcpus = null, $vga = null, $virtioN = null, $vmgenid = null, $vmstatestorage = null, $watchdog = null) {
            $params = ['acpi' => $acpi,
                'agent' => $agent,
                'arch' => $arch,
                'args' => $args,
                'audio0' => $audio0,
                'autostart' => $autostart,
                'background_delay' => $background_delay,
                'balloon' => $balloon,
                'bios' => $bios,
                'boot' => $boot,
                'bootdisk' => $bootdisk,
                'cdrom' => $cdrom,
                'cicustom' => $cicustom,
                'cipassword' => $cipassword,
                'citype' => $citype,
                'ciuser' => $ciuser,
                'cores' => $cores,
                'cpu' => $cpu,
                'cpulimit' => $cpulimit,
                'cpuunits' => $cpuunits,
                'delete' => $delete,
                'description' => $description,
                'digest' => $digest,
                'efidisk0' => $efidisk0,
                'force' => $force,
                'freeze' => $freeze,
                'hookscript' => $hookscript,
                'hotplug' => $hotplug,
                'hugepages' => $hugepages,
                'ivshmem' => $ivshmem,
                'keephugepages' => $keephugepages,
                'keyboard' => $keyboard,
                'kvm' => $kvm,
                'localtime' => $localtime,
                'lock' => $lock,
                'machine' => $machine,
                'memory' => $memory,
                'migrate_downtime' => $migrate_downtime,
                'migrate_speed' => $migrate_speed,
                'name' => $name,
                'nameserver' => $nameserver,
                'numa' => $numa,
                'onboot' => $onboot,
                'ostype' => $ostype,
                'protection' => $protection,
                'reboot' => $reboot,
                'revert' => $revert,
                'rng0' => $rng0,
                'scsihw' => $scsihw,
                'searchdomain' => $searchdomain,
                'shares' => $shares,
                'skiplock' => $skiplock,
                'smbios1' => $smbios1,
                'smp' => $smp,
                'sockets' => $sockets,
                'spice_enhancements' => $spice_enhancements,
                'sshkeys' => $sshkeys,
                'startdate' => $startdate,
                'startup' => $startup,
                'tablet' => $tablet,
                'tags' => $tags,
                'tdf' => $tdf,
                'template' => $template,
                'vcpus' => $vcpus,
                'vga' => $vga,
                'vmgenid' => $vmgenid,
                'vmstatestorage' => $vmstatestorage,
                'watchdog' => $watchdog];
            $this->client->addIndexedParameter($params, 'hostpci', $hostpciN);
            $this->client->addIndexedParameter($params, 'ide', $ideN);
            $this->client->addIndexedParameter($params, 'ipconfig', $ipconfigN);
            $this->client->addIndexedParameter($params, 'net', $netN);
            $this->client->addIndexedParameter($params, 'numa', $numaN);
            $this->client->addIndexedParameter($params, 'parallel', $parallelN);
            $this->client->addIndexedParameter($params, 'sata', $sataN);
            $this->client->addIndexedParameter($params, 'scsi', $scsiN);
            $this->client->addIndexedParameter($params, 'serial', $serialN);
            $this->client->addIndexedParameter($params, 'unused', $unusedN);
            $this->client->addIndexedParameter($params, 'usb', $usbN);
            $this->client->addIndexedParameter($params, 'virtio', $virtioN);
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/config", $params);
        }

        /**
         * Set virtual machine options (asynchrounous API).
         * @param bool $acpi Enable/disable ACPI.
         * @param string $agent Enable/disable Qemu GuestAgent and its properties.
         * @param string $arch Virtual processor architecture. Defaults to the host.
         *   Enum: x86_64,aarch64
         * @param string $args Arbitrary arguments passed to kvm.
         * @param string $audio0 Configure a audio device, useful in combination with QXL/Spice.
         * @param bool $autostart Automatic restart after crash (currently ignored).
         * @param int $background_delay Time to wait for the task to finish. We return 'null' if the task finish within that time.
         * @param int $balloon Amount of target RAM for the VM in MB. Using zero disables the ballon driver.
         * @param string $bios Select BIOS implementation.
         *   Enum: seabios,ovmf
         * @param string $boot Specify guest boot order. Use with 'order=', usage with no key or 'legacy=' is deprecated.
         * @param string $bootdisk Enable booting from specified disk. Deprecated: Use 'boot: order=foo;bar' instead.
         * @param string $cdrom This is an alias for option -ide2
         * @param string $cicustom cloud-init: Specify custom files to replace the automatically generated ones at start.
         * @param string $cipassword cloud-init: Password to assign the user. Using this is generally not recommended. Use ssh keys instead. Also note that older cloud-init versions do not support hashed passwords.
         * @param string $citype Specifies the cloud-init configuration format. The default depends on the configured operating system type (`ostype`. We use the `nocloud` format for Linux, and `configdrive2` for windows.
         *   Enum: configdrive2,nocloud,opennebula
         * @param string $ciuser cloud-init: User name to change ssh keys and password for instead of the image's configured default user.
         * @param int $cores The number of cores per socket.
         * @param string $cpu Emulated CPU type.
         * @param float $cpulimit Limit of CPU usage.
         * @param int $cpuunits CPU weight for a VM.
         * @param string $delete A list of settings you want to delete.
         * @param string $description Description for the VM. Shown in the web-interface VM's summary. This is saved as comment inside the configuration file.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $efidisk0 Configure a Disk for storing EFI vars. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume. Note that SIZE_IN_GiB is ignored here and that the default EFI vars are copied to the volume instead.
         * @param bool $force Force physical removal. Without this, we simple remove the disk from the config file and create an additional configuration entry called 'unused[n]', which contains the volume ID. Unlink of unused[n] always cause physical removal.
         * @param bool $freeze Freeze CPU at startup (use 'c' monitor command to start execution).
         * @param string $hookscript Script that will be executed during various steps in the vms lifetime.
         * @param array $hostpciN Map host PCI devices into guest.
         * @param string $hotplug Selectively enable hotplug features. This is a comma separated list of hotplug features: 'network', 'disk', 'cpu', 'memory' and 'usb'. Use '0' to disable hotplug completely. Value '1' is an alias for the default 'network,disk,usb'.
         * @param string $hugepages Enable/disable hugepages memory.
         *   Enum: any,2,1024
         * @param array $ideN Use volume as IDE hard disk or CD-ROM (n is 0 to 3). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $ipconfigN cloud-init: Specify IP addresses and gateways for the corresponding interface.  IP addresses use CIDR notation, gateways are optional but need an IP of the same type specified.  The special string 'dhcp' can be used for IP addresses to use DHCP, in which case no explicit gateway should be provided. For IPv6 the special string 'auto' can be used to use stateless autoconfiguration. This requires cloud-init 19.4 or newer.  If cloud-init is enabled and neither an IPv4 nor an IPv6 address is specified, it defaults to using dhcp on IPv4. 
         * @param string $ivshmem Inter-VM shared memory. Useful for direct communication between VMs, or to the host.
         * @param bool $keephugepages Use together with hugepages. If enabled, hugepages will not not be deleted after VM shutdown and can be used for subsequent starts.
         * @param string $keyboard Keybord layout for vnc server. Default is read from the '/etc/pve/datacenter.cfg' configuration file.It should not be necessary to set it.
         *   Enum: de,de-ch,da,en-gb,en-us,es,fi,fr,fr-be,fr-ca,fr-ch,hu,is,it,ja,lt,mk,nl,no,pl,pt,pt-br,sv,sl,tr
         * @param bool $kvm Enable/disable KVM hardware virtualization.
         * @param bool $localtime Set the real time clock to local time. This is enabled by default if ostype indicates a Microsoft OS.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,clone,create,migrate,rollback,snapshot,snapshot-delete,suspending,suspended
         * @param string $machine Specifies the Qemu machine type.
         * @param int $memory Amount of RAM for the VM in MB. This is the maximum available memory when you use the balloon device.
         * @param float $migrate_downtime Set maximum tolerated downtime (in seconds) for migrations.
         * @param int $migrate_speed Set maximum speed (in MB/s) for migrations. Value 0 is no limit.
         * @param string $name Set a name for the VM. Only used on the configuration web interface.
         * @param string $nameserver cloud-init: Sets DNS server IP address for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $netN Specify network devices.
         * @param bool $numa Enable/disable NUMA.
         * @param array $numaN NUMA topology.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype Specify guest operating system.
         *   Enum: other,wxp,w2k,w2k3,w2k8,wvista,win7,win8,win10,l24,l26,solaris
         * @param array $parallelN Map host parallel devices (n is 0 to 2).
         * @param bool $protection Sets the protection flag of the VM. This will disable the remove VM and remove disk operations.
         * @param bool $reboot Allow reboot. If set to '0' the VM exit on reboot.
         * @param string $revert Revert a pending change.
         * @param string $rng0 Configure a VirtIO-based Random Number Generator.
         * @param array $sataN Use volume as SATA hard disk or CD-ROM (n is 0 to 5). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $scsiN Use volume as SCSI hard disk or CD-ROM (n is 0 to 30). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $scsihw SCSI controller model
         *   Enum: lsi,lsi53c810,virtio-scsi-pci,virtio-scsi-single,megasas,pvscsi
         * @param string $searchdomain cloud-init: Sets DNS search domains for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $serialN Create a serial device inside the VM (n is 0 to 3)
         * @param int $shares Amount of memory shares for auto-ballooning. The larger the number is, the more memory this VM gets. Number is relative to weights of all other running VMs. Using zero disables auto-ballooning. Auto-ballooning is done by pvestatd.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param string $smbios1 Specify SMBIOS type 1 fields.
         * @param int $smp The number of CPUs. Please use option -sockets instead.
         * @param int $sockets The number of CPU sockets.
         * @param string $spice_enhancements Configure additional enhancements for SPICE.
         * @param string $sshkeys cloud-init: Setup public SSH keys (one key per line, OpenSSH format).
         * @param string $startdate Set the initial date of the real time clock. Valid format for date are:'now' or '2006-06-17T16:01:21' or '2006-06-17'.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param bool $tablet Enable/disable the USB tablet device.
         * @param string $tags Tags of the VM. This is only meta information.
         * @param bool $tdf Enable/disable time drift fix.
         * @param bool $template Enable/disable Template.
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @param array $usbN Configure an USB device (n is 0 to 4).
         * @param int $vcpus Number of hotplugged vcpus.
         * @param string $vga Configure the VGA hardware.
         * @param array $virtioN Use volume as VIRTIO hard disk (n is 0 to 15). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $vmgenid Set VM Generation ID. Use '1' to autogenerate on create or update, pass '0' to disable explicitly.
         * @param string $vmstatestorage Default storage for VM state volumes/files.
         * @param string $watchdog Create a virtual hardware watchdog device.
         * @return Result
         */
        public function updateVmAsync($acpi = null, $agent = null, $arch = null, $args = null, $audio0 = null, $autostart = null, $background_delay = null, $balloon = null, $bios = null, $boot = null, $bootdisk = null, $cdrom = null, $cicustom = null, $cipassword = null, $citype = null, $ciuser = null, $cores = null, $cpu = null, $cpulimit = null, $cpuunits = null, $delete = null, $description = null, $digest = null, $efidisk0 = null, $force = null, $freeze = null, $hookscript = null, $hostpciN = null, $hotplug = null, $hugepages = null, $ideN = null, $ipconfigN = null, $ivshmem = null, $keephugepages = null, $keyboard = null, $kvm = null, $localtime = null, $lock = null, $machine = null, $memory = null, $migrate_downtime = null, $migrate_speed = null, $name = null, $nameserver = null, $netN = null, $numa = null, $numaN = null, $onboot = null, $ostype = null, $parallelN = null, $protection = null, $reboot = null, $revert = null, $rng0 = null, $sataN = null, $scsiN = null, $scsihw = null, $searchdomain = null, $serialN = null, $shares = null, $skiplock = null, $smbios1 = null, $smp = null, $sockets = null, $spice_enhancements = null, $sshkeys = null, $startdate = null, $startup = null, $tablet = null, $tags = null, $tdf = null, $template = null, $unusedN = null, $usbN = null, $vcpus = null, $vga = null, $virtioN = null, $vmgenid = null, $vmstatestorage = null, $watchdog = null) {
            return $this->createRest($acpi, $agent, $arch, $args, $audio0, $autostart, $background_delay, $balloon, $bios, $boot, $bootdisk, $cdrom, $cicustom, $cipassword, $citype, $ciuser, $cores, $cpu, $cpulimit, $cpuunits, $delete, $description, $digest, $efidisk0, $force, $freeze, $hookscript, $hostpciN, $hotplug, $hugepages, $ideN, $ipconfigN, $ivshmem, $keephugepages, $keyboard, $kvm, $localtime, $lock, $machine, $memory, $migrate_downtime, $migrate_speed, $name, $nameserver, $netN, $numa, $numaN, $onboot, $ostype, $parallelN, $protection, $reboot, $revert, $rng0, $sataN, $scsiN, $scsihw, $searchdomain, $serialN, $shares, $skiplock, $smbios1, $smp, $sockets, $spice_enhancements, $sshkeys, $startdate, $startup, $tablet, $tags, $tdf, $template, $unusedN, $usbN, $vcpus, $vga, $virtioN, $vmgenid, $vmstatestorage, $watchdog);
        }

        /**
         * Set virtual machine options (synchrounous API) - You should consider using the POST method instead for any actions involving hotplug or storage allocation.
         * @param bool $acpi Enable/disable ACPI.
         * @param string $agent Enable/disable Qemu GuestAgent and its properties.
         * @param string $arch Virtual processor architecture. Defaults to the host.
         *   Enum: x86_64,aarch64
         * @param string $args Arbitrary arguments passed to kvm.
         * @param string $audio0 Configure a audio device, useful in combination with QXL/Spice.
         * @param bool $autostart Automatic restart after crash (currently ignored).
         * @param int $balloon Amount of target RAM for the VM in MB. Using zero disables the ballon driver.
         * @param string $bios Select BIOS implementation.
         *   Enum: seabios,ovmf
         * @param string $boot Specify guest boot order. Use with 'order=', usage with no key or 'legacy=' is deprecated.
         * @param string $bootdisk Enable booting from specified disk. Deprecated: Use 'boot: order=foo;bar' instead.
         * @param string $cdrom This is an alias for option -ide2
         * @param string $cicustom cloud-init: Specify custom files to replace the automatically generated ones at start.
         * @param string $cipassword cloud-init: Password to assign the user. Using this is generally not recommended. Use ssh keys instead. Also note that older cloud-init versions do not support hashed passwords.
         * @param string $citype Specifies the cloud-init configuration format. The default depends on the configured operating system type (`ostype`. We use the `nocloud` format for Linux, and `configdrive2` for windows.
         *   Enum: configdrive2,nocloud,opennebula
         * @param string $ciuser cloud-init: User name to change ssh keys and password for instead of the image's configured default user.
         * @param int $cores The number of cores per socket.
         * @param string $cpu Emulated CPU type.
         * @param float $cpulimit Limit of CPU usage.
         * @param int $cpuunits CPU weight for a VM.
         * @param string $delete A list of settings you want to delete.
         * @param string $description Description for the VM. Shown in the web-interface VM's summary. This is saved as comment inside the configuration file.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $efidisk0 Configure a Disk for storing EFI vars. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume. Note that SIZE_IN_GiB is ignored here and that the default EFI vars are copied to the volume instead.
         * @param bool $force Force physical removal. Without this, we simple remove the disk from the config file and create an additional configuration entry called 'unused[n]', which contains the volume ID. Unlink of unused[n] always cause physical removal.
         * @param bool $freeze Freeze CPU at startup (use 'c' monitor command to start execution).
         * @param string $hookscript Script that will be executed during various steps in the vms lifetime.
         * @param array $hostpciN Map host PCI devices into guest.
         * @param string $hotplug Selectively enable hotplug features. This is a comma separated list of hotplug features: 'network', 'disk', 'cpu', 'memory' and 'usb'. Use '0' to disable hotplug completely. Value '1' is an alias for the default 'network,disk,usb'.
         * @param string $hugepages Enable/disable hugepages memory.
         *   Enum: any,2,1024
         * @param array $ideN Use volume as IDE hard disk or CD-ROM (n is 0 to 3). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $ipconfigN cloud-init: Specify IP addresses and gateways for the corresponding interface.  IP addresses use CIDR notation, gateways are optional but need an IP of the same type specified.  The special string 'dhcp' can be used for IP addresses to use DHCP, in which case no explicit gateway should be provided. For IPv6 the special string 'auto' can be used to use stateless autoconfiguration. This requires cloud-init 19.4 or newer.  If cloud-init is enabled and neither an IPv4 nor an IPv6 address is specified, it defaults to using dhcp on IPv4. 
         * @param string $ivshmem Inter-VM shared memory. Useful for direct communication between VMs, or to the host.
         * @param bool $keephugepages Use together with hugepages. If enabled, hugepages will not not be deleted after VM shutdown and can be used for subsequent starts.
         * @param string $keyboard Keybord layout for vnc server. Default is read from the '/etc/pve/datacenter.cfg' configuration file.It should not be necessary to set it.
         *   Enum: de,de-ch,da,en-gb,en-us,es,fi,fr,fr-be,fr-ca,fr-ch,hu,is,it,ja,lt,mk,nl,no,pl,pt,pt-br,sv,sl,tr
         * @param bool $kvm Enable/disable KVM hardware virtualization.
         * @param bool $localtime Set the real time clock to local time. This is enabled by default if ostype indicates a Microsoft OS.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,clone,create,migrate,rollback,snapshot,snapshot-delete,suspending,suspended
         * @param string $machine Specifies the Qemu machine type.
         * @param int $memory Amount of RAM for the VM in MB. This is the maximum available memory when you use the balloon device.
         * @param float $migrate_downtime Set maximum tolerated downtime (in seconds) for migrations.
         * @param int $migrate_speed Set maximum speed (in MB/s) for migrations. Value 0 is no limit.
         * @param string $name Set a name for the VM. Only used on the configuration web interface.
         * @param string $nameserver cloud-init: Sets DNS server IP address for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $netN Specify network devices.
         * @param bool $numa Enable/disable NUMA.
         * @param array $numaN NUMA topology.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype Specify guest operating system.
         *   Enum: other,wxp,w2k,w2k3,w2k8,wvista,win7,win8,win10,l24,l26,solaris
         * @param array $parallelN Map host parallel devices (n is 0 to 2).
         * @param bool $protection Sets the protection flag of the VM. This will disable the remove VM and remove disk operations.
         * @param bool $reboot Allow reboot. If set to '0' the VM exit on reboot.
         * @param string $revert Revert a pending change.
         * @param string $rng0 Configure a VirtIO-based Random Number Generator.
         * @param array $sataN Use volume as SATA hard disk or CD-ROM (n is 0 to 5). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $scsiN Use volume as SCSI hard disk or CD-ROM (n is 0 to 30). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $scsihw SCSI controller model
         *   Enum: lsi,lsi53c810,virtio-scsi-pci,virtio-scsi-single,megasas,pvscsi
         * @param string $searchdomain cloud-init: Sets DNS search domains for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $serialN Create a serial device inside the VM (n is 0 to 3)
         * @param int $shares Amount of memory shares for auto-ballooning. The larger the number is, the more memory this VM gets. Number is relative to weights of all other running VMs. Using zero disables auto-ballooning. Auto-ballooning is done by pvestatd.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param string $smbios1 Specify SMBIOS type 1 fields.
         * @param int $smp The number of CPUs. Please use option -sockets instead.
         * @param int $sockets The number of CPU sockets.
         * @param string $spice_enhancements Configure additional enhancements for SPICE.
         * @param string $sshkeys cloud-init: Setup public SSH keys (one key per line, OpenSSH format).
         * @param string $startdate Set the initial date of the real time clock. Valid format for date are:'now' or '2006-06-17T16:01:21' or '2006-06-17'.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param bool $tablet Enable/disable the USB tablet device.
         * @param string $tags Tags of the VM. This is only meta information.
         * @param bool $tdf Enable/disable time drift fix.
         * @param bool $template Enable/disable Template.
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @param array $usbN Configure an USB device (n is 0 to 4).
         * @param int $vcpus Number of hotplugged vcpus.
         * @param string $vga Configure the VGA hardware.
         * @param array $virtioN Use volume as VIRTIO hard disk (n is 0 to 15). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $vmgenid Set VM Generation ID. Use '1' to autogenerate on create or update, pass '0' to disable explicitly.
         * @param string $vmstatestorage Default storage for VM state volumes/files.
         * @param string $watchdog Create a virtual hardware watchdog device.
         * @return Result
         */
        public function setRest($acpi = null, $agent = null, $arch = null, $args = null, $audio0 = null, $autostart = null, $balloon = null, $bios = null, $boot = null, $bootdisk = null, $cdrom = null, $cicustom = null, $cipassword = null, $citype = null, $ciuser = null, $cores = null, $cpu = null, $cpulimit = null, $cpuunits = null, $delete = null, $description = null, $digest = null, $efidisk0 = null, $force = null, $freeze = null, $hookscript = null, $hostpciN = null, $hotplug = null, $hugepages = null, $ideN = null, $ipconfigN = null, $ivshmem = null, $keephugepages = null, $keyboard = null, $kvm = null, $localtime = null, $lock = null, $machine = null, $memory = null, $migrate_downtime = null, $migrate_speed = null, $name = null, $nameserver = null, $netN = null, $numa = null, $numaN = null, $onboot = null, $ostype = null, $parallelN = null, $protection = null, $reboot = null, $revert = null, $rng0 = null, $sataN = null, $scsiN = null, $scsihw = null, $searchdomain = null, $serialN = null, $shares = null, $skiplock = null, $smbios1 = null, $smp = null, $sockets = null, $spice_enhancements = null, $sshkeys = null, $startdate = null, $startup = null, $tablet = null, $tags = null, $tdf = null, $template = null, $unusedN = null, $usbN = null, $vcpus = null, $vga = null, $virtioN = null, $vmgenid = null, $vmstatestorage = null, $watchdog = null) {
            $params = ['acpi' => $acpi,
                'agent' => $agent,
                'arch' => $arch,
                'args' => $args,
                'audio0' => $audio0,
                'autostart' => $autostart,
                'balloon' => $balloon,
                'bios' => $bios,
                'boot' => $boot,
                'bootdisk' => $bootdisk,
                'cdrom' => $cdrom,
                'cicustom' => $cicustom,
                'cipassword' => $cipassword,
                'citype' => $citype,
                'ciuser' => $ciuser,
                'cores' => $cores,
                'cpu' => $cpu,
                'cpulimit' => $cpulimit,
                'cpuunits' => $cpuunits,
                'delete' => $delete,
                'description' => $description,
                'digest' => $digest,
                'efidisk0' => $efidisk0,
                'force' => $force,
                'freeze' => $freeze,
                'hookscript' => $hookscript,
                'hotplug' => $hotplug,
                'hugepages' => $hugepages,
                'ivshmem' => $ivshmem,
                'keephugepages' => $keephugepages,
                'keyboard' => $keyboard,
                'kvm' => $kvm,
                'localtime' => $localtime,
                'lock' => $lock,
                'machine' => $machine,
                'memory' => $memory,
                'migrate_downtime' => $migrate_downtime,
                'migrate_speed' => $migrate_speed,
                'name' => $name,
                'nameserver' => $nameserver,
                'numa' => $numa,
                'onboot' => $onboot,
                'ostype' => $ostype,
                'protection' => $protection,
                'reboot' => $reboot,
                'revert' => $revert,
                'rng0' => $rng0,
                'scsihw' => $scsihw,
                'searchdomain' => $searchdomain,
                'shares' => $shares,
                'skiplock' => $skiplock,
                'smbios1' => $smbios1,
                'smp' => $smp,
                'sockets' => $sockets,
                'spice_enhancements' => $spice_enhancements,
                'sshkeys' => $sshkeys,
                'startdate' => $startdate,
                'startup' => $startup,
                'tablet' => $tablet,
                'tags' => $tags,
                'tdf' => $tdf,
                'template' => $template,
                'vcpus' => $vcpus,
                'vga' => $vga,
                'vmgenid' => $vmgenid,
                'vmstatestorage' => $vmstatestorage,
                'watchdog' => $watchdog];
            $this->client->addIndexedParameter($params, 'hostpci', $hostpciN);
            $this->client->addIndexedParameter($params, 'ide', $ideN);
            $this->client->addIndexedParameter($params, 'ipconfig', $ipconfigN);
            $this->client->addIndexedParameter($params, 'net', $netN);
            $this->client->addIndexedParameter($params, 'numa', $numaN);
            $this->client->addIndexedParameter($params, 'parallel', $parallelN);
            $this->client->addIndexedParameter($params, 'sata', $sataN);
            $this->client->addIndexedParameter($params, 'scsi', $scsiN);
            $this->client->addIndexedParameter($params, 'serial', $serialN);
            $this->client->addIndexedParameter($params, 'unused', $unusedN);
            $this->client->addIndexedParameter($params, 'usb', $usbN);
            $this->client->addIndexedParameter($params, 'virtio', $virtioN);
            return $this->client->set("/nodes/{$this->node}/qemu/{$this->vmid}/config", $params);
        }

        /**
         * Set virtual machine options (synchrounous API) - You should consider using the POST method instead for any actions involving hotplug or storage allocation.
         * @param bool $acpi Enable/disable ACPI.
         * @param string $agent Enable/disable Qemu GuestAgent and its properties.
         * @param string $arch Virtual processor architecture. Defaults to the host.
         *   Enum: x86_64,aarch64
         * @param string $args Arbitrary arguments passed to kvm.
         * @param string $audio0 Configure a audio device, useful in combination with QXL/Spice.
         * @param bool $autostart Automatic restart after crash (currently ignored).
         * @param int $balloon Amount of target RAM for the VM in MB. Using zero disables the ballon driver.
         * @param string $bios Select BIOS implementation.
         *   Enum: seabios,ovmf
         * @param string $boot Specify guest boot order. Use with 'order=', usage with no key or 'legacy=' is deprecated.
         * @param string $bootdisk Enable booting from specified disk. Deprecated: Use 'boot: order=foo;bar' instead.
         * @param string $cdrom This is an alias for option -ide2
         * @param string $cicustom cloud-init: Specify custom files to replace the automatically generated ones at start.
         * @param string $cipassword cloud-init: Password to assign the user. Using this is generally not recommended. Use ssh keys instead. Also note that older cloud-init versions do not support hashed passwords.
         * @param string $citype Specifies the cloud-init configuration format. The default depends on the configured operating system type (`ostype`. We use the `nocloud` format for Linux, and `configdrive2` for windows.
         *   Enum: configdrive2,nocloud,opennebula
         * @param string $ciuser cloud-init: User name to change ssh keys and password for instead of the image's configured default user.
         * @param int $cores The number of cores per socket.
         * @param string $cpu Emulated CPU type.
         * @param float $cpulimit Limit of CPU usage.
         * @param int $cpuunits CPU weight for a VM.
         * @param string $delete A list of settings you want to delete.
         * @param string $description Description for the VM. Shown in the web-interface VM's summary. This is saved as comment inside the configuration file.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $efidisk0 Configure a Disk for storing EFI vars. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume. Note that SIZE_IN_GiB is ignored here and that the default EFI vars are copied to the volume instead.
         * @param bool $force Force physical removal. Without this, we simple remove the disk from the config file and create an additional configuration entry called 'unused[n]', which contains the volume ID. Unlink of unused[n] always cause physical removal.
         * @param bool $freeze Freeze CPU at startup (use 'c' monitor command to start execution).
         * @param string $hookscript Script that will be executed during various steps in the vms lifetime.
         * @param array $hostpciN Map host PCI devices into guest.
         * @param string $hotplug Selectively enable hotplug features. This is a comma separated list of hotplug features: 'network', 'disk', 'cpu', 'memory' and 'usb'. Use '0' to disable hotplug completely. Value '1' is an alias for the default 'network,disk,usb'.
         * @param string $hugepages Enable/disable hugepages memory.
         *   Enum: any,2,1024
         * @param array $ideN Use volume as IDE hard disk or CD-ROM (n is 0 to 3). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $ipconfigN cloud-init: Specify IP addresses and gateways for the corresponding interface.  IP addresses use CIDR notation, gateways are optional but need an IP of the same type specified.  The special string 'dhcp' can be used for IP addresses to use DHCP, in which case no explicit gateway should be provided. For IPv6 the special string 'auto' can be used to use stateless autoconfiguration. This requires cloud-init 19.4 or newer.  If cloud-init is enabled and neither an IPv4 nor an IPv6 address is specified, it defaults to using dhcp on IPv4. 
         * @param string $ivshmem Inter-VM shared memory. Useful for direct communication between VMs, or to the host.
         * @param bool $keephugepages Use together with hugepages. If enabled, hugepages will not not be deleted after VM shutdown and can be used for subsequent starts.
         * @param string $keyboard Keybord layout for vnc server. Default is read from the '/etc/pve/datacenter.cfg' configuration file.It should not be necessary to set it.
         *   Enum: de,de-ch,da,en-gb,en-us,es,fi,fr,fr-be,fr-ca,fr-ch,hu,is,it,ja,lt,mk,nl,no,pl,pt,pt-br,sv,sl,tr
         * @param bool $kvm Enable/disable KVM hardware virtualization.
         * @param bool $localtime Set the real time clock to local time. This is enabled by default if ostype indicates a Microsoft OS.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,clone,create,migrate,rollback,snapshot,snapshot-delete,suspending,suspended
         * @param string $machine Specifies the Qemu machine type.
         * @param int $memory Amount of RAM for the VM in MB. This is the maximum available memory when you use the balloon device.
         * @param float $migrate_downtime Set maximum tolerated downtime (in seconds) for migrations.
         * @param int $migrate_speed Set maximum speed (in MB/s) for migrations. Value 0 is no limit.
         * @param string $name Set a name for the VM. Only used on the configuration web interface.
         * @param string $nameserver cloud-init: Sets DNS server IP address for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $netN Specify network devices.
         * @param bool $numa Enable/disable NUMA.
         * @param array $numaN NUMA topology.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype Specify guest operating system.
         *   Enum: other,wxp,w2k,w2k3,w2k8,wvista,win7,win8,win10,l24,l26,solaris
         * @param array $parallelN Map host parallel devices (n is 0 to 2).
         * @param bool $protection Sets the protection flag of the VM. This will disable the remove VM and remove disk operations.
         * @param bool $reboot Allow reboot. If set to '0' the VM exit on reboot.
         * @param string $revert Revert a pending change.
         * @param string $rng0 Configure a VirtIO-based Random Number Generator.
         * @param array $sataN Use volume as SATA hard disk or CD-ROM (n is 0 to 5). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param array $scsiN Use volume as SCSI hard disk or CD-ROM (n is 0 to 30). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $scsihw SCSI controller model
         *   Enum: lsi,lsi53c810,virtio-scsi-pci,virtio-scsi-single,megasas,pvscsi
         * @param string $searchdomain cloud-init: Sets DNS search domains for a container. Create will' 	    .' automatically use the setting from the host if neither searchdomain nor nameserver' 	    .' are set.
         * @param array $serialN Create a serial device inside the VM (n is 0 to 3)
         * @param int $shares Amount of memory shares for auto-ballooning. The larger the number is, the more memory this VM gets. Number is relative to weights of all other running VMs. Using zero disables auto-ballooning. Auto-ballooning is done by pvestatd.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param string $smbios1 Specify SMBIOS type 1 fields.
         * @param int $smp The number of CPUs. Please use option -sockets instead.
         * @param int $sockets The number of CPU sockets.
         * @param string $spice_enhancements Configure additional enhancements for SPICE.
         * @param string $sshkeys cloud-init: Setup public SSH keys (one key per line, OpenSSH format).
         * @param string $startdate Set the initial date of the real time clock. Valid format for date are:'now' or '2006-06-17T16:01:21' or '2006-06-17'.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param bool $tablet Enable/disable the USB tablet device.
         * @param string $tags Tags of the VM. This is only meta information.
         * @param bool $tdf Enable/disable time drift fix.
         * @param bool $template Enable/disable Template.
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @param array $usbN Configure an USB device (n is 0 to 4).
         * @param int $vcpus Number of hotplugged vcpus.
         * @param string $vga Configure the VGA hardware.
         * @param array $virtioN Use volume as VIRTIO hard disk (n is 0 to 15). Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $vmgenid Set VM Generation ID. Use '1' to autogenerate on create or update, pass '0' to disable explicitly.
         * @param string $vmstatestorage Default storage for VM state volumes/files.
         * @param string $watchdog Create a virtual hardware watchdog device.
         * @return Result
         */
        public function updateVm($acpi = null, $agent = null, $arch = null, $args = null, $audio0 = null, $autostart = null, $balloon = null, $bios = null, $boot = null, $bootdisk = null, $cdrom = null, $cicustom = null, $cipassword = null, $citype = null, $ciuser = null, $cores = null, $cpu = null, $cpulimit = null, $cpuunits = null, $delete = null, $description = null, $digest = null, $efidisk0 = null, $force = null, $freeze = null, $hookscript = null, $hostpciN = null, $hotplug = null, $hugepages = null, $ideN = null, $ipconfigN = null, $ivshmem = null, $keephugepages = null, $keyboard = null, $kvm = null, $localtime = null, $lock = null, $machine = null, $memory = null, $migrate_downtime = null, $migrate_speed = null, $name = null, $nameserver = null, $netN = null, $numa = null, $numaN = null, $onboot = null, $ostype = null, $parallelN = null, $protection = null, $reboot = null, $revert = null, $rng0 = null, $sataN = null, $scsiN = null, $scsihw = null, $searchdomain = null, $serialN = null, $shares = null, $skiplock = null, $smbios1 = null, $smp = null, $sockets = null, $spice_enhancements = null, $sshkeys = null, $startdate = null, $startup = null, $tablet = null, $tags = null, $tdf = null, $template = null, $unusedN = null, $usbN = null, $vcpus = null, $vga = null, $virtioN = null, $vmgenid = null, $vmstatestorage = null, $watchdog = null) {
            return $this->setRest($acpi, $agent, $arch, $args, $audio0, $autostart, $balloon, $bios, $boot, $bootdisk, $cdrom, $cicustom, $cipassword, $citype, $ciuser, $cores, $cpu, $cpulimit, $cpuunits, $delete, $description, $digest, $efidisk0, $force, $freeze, $hookscript, $hostpciN, $hotplug, $hugepages, $ideN, $ipconfigN, $ivshmem, $keephugepages, $keyboard, $kvm, $localtime, $lock, $machine, $memory, $migrate_downtime, $migrate_speed, $name, $nameserver, $netN, $numa, $numaN, $onboot, $ostype, $parallelN, $protection, $reboot, $revert, $rng0, $sataN, $scsiN, $scsihw, $searchdomain, $serialN, $shares, $skiplock, $smbios1, $smp, $sockets, $spice_enhancements, $sshkeys, $startdate, $startup, $tablet, $tags, $tdf, $template, $unusedN, $usbN, $vcpus, $vga, $virtioN, $vmgenid, $vmstatestorage, $watchdog);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesPending
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesPending {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get the virtual machine configuration with both current and pending values.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/pending");
        }

        /**
         * Get the virtual machine configuration with both current and pending values.
         * @return Result
         */
        public function vmPending() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesUnlink
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesUnlink {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Unlink/delete disk images.
         * @param string $idlist A list of disk IDs you want to delete.
         * @param bool $force Force physical removal. Without this, we simple remove the disk from the config file and create an additional configuration entry called 'unused[n]', which contains the volume ID. Unlink of unused[n] always cause physical removal.
         * @return Result
         */
        public function setRest($idlist, $force = null) {
            $params = ['idlist' => $idlist,
                'force' => $force];
            return $this->client->set("/nodes/{$this->node}/qemu/{$this->vmid}/unlink", $params);
        }

        /**
         * Unlink/delete disk images.
         * @param string $idlist A list of disk IDs you want to delete.
         * @param bool $force Force physical removal. Without this, we simple remove the disk from the config file and create an additional configuration entry called 'unused[n]', which contains the volume ID. Unlink of unused[n] always cause physical removal.
         * @return Result
         */
        public function unlink($idlist, $force = null) {
            return $this->setRest($idlist, $force);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesVncproxy
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesVncproxy {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Creates a TCP VNC proxy connections.
         * @param bool $generate_password Generates a random password to be used as ticket instead of the API ticket.
         * @param bool $websocket starts websockify instead of vncproxy
         * @return Result
         */
        public function createRest($generate_password = null, $websocket = null) {
            $params = ['generate-password' => $generate_password,
                'websocket' => $websocket];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/vncproxy", $params);
        }

        /**
         * Creates a TCP VNC proxy connections.
         * @param bool $generate_password Generates a random password to be used as ticket instead of the API ticket.
         * @param bool $websocket starts websockify instead of vncproxy
         * @return Result
         */
        public function vncproxy($generate_password = null, $websocket = null) {
            return $this->createRest($generate_password, $websocket);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesTermproxy
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesTermproxy {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Creates a TCP proxy connections.
         * @param string $serial opens a serial terminal (defaults to display)
         *   Enum: serial0,serial1,serial2,serial3
         * @return Result
         */
        public function createRest($serial = null) {
            $params = ['serial' => $serial];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/termproxy", $params);
        }

        /**
         * Creates a TCP proxy connections.
         * @param string $serial opens a serial terminal (defaults to display)
         *   Enum: serial0,serial1,serial2,serial3
         * @return Result
         */
        public function termproxy($serial = null) {
            return $this->createRest($serial);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesVncwebsocket
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesVncwebsocket {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Opens a weksocket for VNC traffic.
         * @param int $port Port number returned by previous vncproxy call.
         * @param string $vncticket Ticket from previous call to vncproxy.
         * @return Result
         */
        public function getRest($port, $vncticket) {
            $params = ['port' => $port,
                'vncticket' => $vncticket];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/vncwebsocket", $params);
        }

        /**
         * Opens a weksocket for VNC traffic.
         * @param int $port Port number returned by previous vncproxy call.
         * @param string $vncticket Ticket from previous call to vncproxy.
         * @return Result
         */
        public function vncwebsocket($port, $vncticket) {
            return $this->getRest($port, $vncticket);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesSpiceproxy
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesSpiceproxy {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Returns a SPICE configuration to connect to the VM.
         * @param string $proxy SPICE proxy server. This can be used by the client to specify the proxy server. All nodes in a cluster runs 'spiceproxy', so it is up to the client to choose one. By default, we return the node where the VM is currently running. As reasonable setting is to use same node you use to connect to the API (This is window.location.hostname for the JS GUI).
         * @return Result
         */
        public function createRest($proxy = null) {
            $params = ['proxy' => $proxy];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/spiceproxy", $params);
        }

        /**
         * Returns a SPICE configuration to connect to the VM.
         * @param string $proxy SPICE proxy server. This can be used by the client to specify the proxy server. All nodes in a cluster runs 'spiceproxy', so it is up to the client to choose one. By default, we return the node where the VM is currently running. As reasonable setting is to use same node you use to connect to the API (This is window.location.hostname for the JS GUI).
         * @return Result
         */
        public function spiceproxy($proxy = null) {
            return $this->createRest($proxy);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesStatus {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * @ignore
         */
        private $current;

        /**
         * Get StatusVmidQemuNodeNodesCurrent
         * @return PVEStatusVmidQemuNodeNodesCurrent
         */
        public function getCurrent() {
            return $this->current ?: ($this->current = new PVEStatusVmidQemuNodeNodesCurrent($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $start;

        /**
         * Get StatusVmidQemuNodeNodesStart
         * @return PVEStatusVmidQemuNodeNodesStart
         */
        public function getStart() {
            return $this->start ?: ($this->start = new PVEStatusVmidQemuNodeNodesStart($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $stop;

        /**
         * Get StatusVmidQemuNodeNodesStop
         * @return PVEStatusVmidQemuNodeNodesStop
         */
        public function getStop() {
            return $this->stop ?: ($this->stop = new PVEStatusVmidQemuNodeNodesStop($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $reset;

        /**
         * Get StatusVmidQemuNodeNodesReset
         * @return PVEStatusVmidQemuNodeNodesReset
         */
        public function getReset() {
            return $this->reset ?: ($this->reset = new PVEStatusVmidQemuNodeNodesReset($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $shutdown;

        /**
         * Get StatusVmidQemuNodeNodesShutdown
         * @return PVEStatusVmidQemuNodeNodesShutdown
         */
        public function getShutdown() {
            return $this->shutdown ?: ($this->shutdown = new PVEStatusVmidQemuNodeNodesShutdown($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $reboot;

        /**
         * Get StatusVmidQemuNodeNodesReboot
         * @return PVEStatusVmidQemuNodeNodesReboot
         */
        public function getReboot() {
            return $this->reboot ?: ($this->reboot = new PVEStatusVmidQemuNodeNodesReboot($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $suspend;

        /**
         * Get StatusVmidQemuNodeNodesSuspend
         * @return PVEStatusVmidQemuNodeNodesSuspend
         */
        public function getSuspend() {
            return $this->suspend ?: ($this->suspend = new PVEStatusVmidQemuNodeNodesSuspend($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $resume;

        /**
         * Get StatusVmidQemuNodeNodesResume
         * @return PVEStatusVmidQemuNodeNodesResume
         */
        public function getResume() {
            return $this->resume ?: ($this->resume = new PVEStatusVmidQemuNodeNodesResume($this->client, $this->node, $this->vmid));
        }

        /**
         * Directory index
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/status");
        }

        /**
         * Directory index
         * @return Result
         */
        public function vmcmdidx() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEStatusVmidQemuNodeNodesCurrent
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidQemuNodeNodesCurrent {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get virtual machine status.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/status/current");
        }

        /**
         * Get virtual machine status.
         * @return Result
         */
        public function vmStatus() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEStatusVmidQemuNodeNodesStart
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidQemuNodeNodesStart {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Start virtual machine.
         * @param string $force_cpu Override QEMU's -cpu argument with the given string.
         * @param string $machine Specifies the Qemu machine type.
         * @param string $migratedfrom The cluster node name.
         * @param string $migration_network CIDR of the (sub) network that is used for migration.
         * @param string $migration_type Migration traffic is encrypted using an SSH tunnel by default. On secure, completely private networks this can be disabled to increase performance.
         *   Enum: secure,insecure
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param string $stateuri Some command save/restore state from this location.
         * @param string $targetstorage Mapping from source to target storages. Providing only a single storage ID maps all source storages to that storage. Providing the special value '1' will map each source storage to itself.
         * @param int $timeout Wait maximal timeout seconds.
         * @return Result
         */
        public function createRest($force_cpu = null, $machine = null, $migratedfrom = null, $migration_network = null, $migration_type = null, $skiplock = null, $stateuri = null, $targetstorage = null, $timeout = null) {
            $params = ['force-cpu' => $force_cpu,
                'machine' => $machine,
                'migratedfrom' => $migratedfrom,
                'migration_network' => $migration_network,
                'migration_type' => $migration_type,
                'skiplock' => $skiplock,
                'stateuri' => $stateuri,
                'targetstorage' => $targetstorage,
                'timeout' => $timeout];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/status/start", $params);
        }

        /**
         * Start virtual machine.
         * @param string $force_cpu Override QEMU's -cpu argument with the given string.
         * @param string $machine Specifies the Qemu machine type.
         * @param string $migratedfrom The cluster node name.
         * @param string $migration_network CIDR of the (sub) network that is used for migration.
         * @param string $migration_type Migration traffic is encrypted using an SSH tunnel by default. On secure, completely private networks this can be disabled to increase performance.
         *   Enum: secure,insecure
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param string $stateuri Some command save/restore state from this location.
         * @param string $targetstorage Mapping from source to target storages. Providing only a single storage ID maps all source storages to that storage. Providing the special value '1' will map each source storage to itself.
         * @param int $timeout Wait maximal timeout seconds.
         * @return Result
         */
        public function vmStart($force_cpu = null, $machine = null, $migratedfrom = null, $migration_network = null, $migration_type = null, $skiplock = null, $stateuri = null, $targetstorage = null, $timeout = null) {
            return $this->createRest($force_cpu, $machine, $migratedfrom, $migration_network, $migration_type, $skiplock, $stateuri, $targetstorage, $timeout);
        }

    }

    /**
     * Class PVEStatusVmidQemuNodeNodesStop
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidQemuNodeNodesStop {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Stop virtual machine. The qemu process will exit immediately. Thisis akin to pulling the power plug of a running computer and may damage the VM data
         * @param bool $keepActive Do not deactivate storage volumes.
         * @param string $migratedfrom The cluster node name.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param int $timeout Wait maximal timeout seconds.
         * @return Result
         */
        public function createRest($keepActive = null, $migratedfrom = null, $skiplock = null, $timeout = null) {
            $params = ['keepActive' => $keepActive,
                'migratedfrom' => $migratedfrom,
                'skiplock' => $skiplock,
                'timeout' => $timeout];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/status/stop", $params);
        }

        /**
         * Stop virtual machine. The qemu process will exit immediately. Thisis akin to pulling the power plug of a running computer and may damage the VM data
         * @param bool $keepActive Do not deactivate storage volumes.
         * @param string $migratedfrom The cluster node name.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param int $timeout Wait maximal timeout seconds.
         * @return Result
         */
        public function vmStop($keepActive = null, $migratedfrom = null, $skiplock = null, $timeout = null) {
            return $this->createRest($keepActive, $migratedfrom, $skiplock, $timeout);
        }

    }

    /**
     * Class PVEStatusVmidQemuNodeNodesReset
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidQemuNodeNodesReset {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Reset virtual machine.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function createRest($skiplock = null) {
            $params = ['skiplock' => $skiplock];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/status/reset", $params);
        }

        /**
         * Reset virtual machine.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function vmReset($skiplock = null) {
            return $this->createRest($skiplock);
        }

    }

    /**
     * Class PVEStatusVmidQemuNodeNodesShutdown
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidQemuNodeNodesShutdown {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Shutdown virtual machine. This is similar to pressing the power button on a physical machine.This will send an ACPI event for the guest OS, which should then proceed to a clean shutdown.
         * @param bool $forceStop Make sure the VM stops.
         * @param bool $keepActive Do not deactivate storage volumes.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param int $timeout Wait maximal timeout seconds.
         * @return Result
         */
        public function createRest($forceStop = null, $keepActive = null, $skiplock = null, $timeout = null) {
            $params = ['forceStop' => $forceStop,
                'keepActive' => $keepActive,
                'skiplock' => $skiplock,
                'timeout' => $timeout];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/status/shutdown", $params);
        }

        /**
         * Shutdown virtual machine. This is similar to pressing the power button on a physical machine.This will send an ACPI event for the guest OS, which should then proceed to a clean shutdown.
         * @param bool $forceStop Make sure the VM stops.
         * @param bool $keepActive Do not deactivate storage volumes.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param int $timeout Wait maximal timeout seconds.
         * @return Result
         */
        public function vmShutdown($forceStop = null, $keepActive = null, $skiplock = null, $timeout = null) {
            return $this->createRest($forceStop, $keepActive, $skiplock, $timeout);
        }

    }

    /**
     * Class PVEStatusVmidQemuNodeNodesReboot
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidQemuNodeNodesReboot {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Reboot the VM by shutting it down, and starting it again. Applies pending changes.
         * @param int $timeout Wait maximal timeout seconds for the shutdown.
         * @return Result
         */
        public function createRest($timeout = null) {
            $params = ['timeout' => $timeout];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/status/reboot", $params);
        }

        /**
         * Reboot the VM by shutting it down, and starting it again. Applies pending changes.
         * @param int $timeout Wait maximal timeout seconds for the shutdown.
         * @return Result
         */
        public function vmReboot($timeout = null) {
            return $this->createRest($timeout);
        }

    }

    /**
     * Class PVEStatusVmidQemuNodeNodesSuspend
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidQemuNodeNodesSuspend {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Suspend virtual machine.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param string $statestorage The storage for the VM state
         * @param bool $todisk If set, suspends the VM to disk. Will be resumed on next VM start.
         * @return Result
         */
        public function createRest($skiplock = null, $statestorage = null, $todisk = null) {
            $params = ['skiplock' => $skiplock,
                'statestorage' => $statestorage,
                'todisk' => $todisk];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/status/suspend", $params);
        }

        /**
         * Suspend virtual machine.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @param string $statestorage The storage for the VM state
         * @param bool $todisk If set, suspends the VM to disk. Will be resumed on next VM start.
         * @return Result
         */
        public function vmSuspend($skiplock = null, $statestorage = null, $todisk = null) {
            return $this->createRest($skiplock, $statestorage, $todisk);
        }

    }

    /**
     * Class PVEStatusVmidQemuNodeNodesResume
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidQemuNodeNodesResume {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Resume virtual machine.
         * @param bool $nocheck 
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function createRest($nocheck = null, $skiplock = null) {
            $params = ['nocheck' => $nocheck,
                'skiplock' => $skiplock];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/status/resume", $params);
        }

        /**
         * Resume virtual machine.
         * @param bool $nocheck 
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function vmResume($nocheck = null, $skiplock = null) {
            return $this->createRest($nocheck, $skiplock);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesSendkey
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesSendkey {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Send key event to virtual machine.
         * @param string $key The key (qemu monitor encoding).
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function setRest($key, $skiplock = null) {
            $params = ['key' => $key,
                'skiplock' => $skiplock];
            return $this->client->set("/nodes/{$this->node}/qemu/{$this->vmid}/sendkey", $params);
        }

        /**
         * Send key event to virtual machine.
         * @param string $key The key (qemu monitor encoding).
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function vmSendkey($key, $skiplock = null) {
            return $this->setRest($key, $skiplock);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesFeature
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesFeature {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Check if feature for virtual machine is available.
         * @param string $feature Feature to check.
         *   Enum: snapshot,clone,copy
         * @param string $snapname The name of the snapshot.
         * @return Result
         */
        public function getRest($feature, $snapname = null) {
            $params = ['feature' => $feature,
                'snapname' => $snapname];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/feature", $params);
        }

        /**
         * Check if feature for virtual machine is available.
         * @param string $feature Feature to check.
         *   Enum: snapshot,clone,copy
         * @param string $snapname The name of the snapshot.
         * @return Result
         */
        public function vmFeature($feature, $snapname = null) {
            return $this->getRest($feature, $snapname);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesClone
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesClone {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Create a copy of virtual machine/template.
         * @param int $newid VMID for the clone.
         * @param int $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param string $description Description for the new VM.
         * @param string $format Target format for file storage. Only valid for full clone.
         *   Enum: raw,qcow2,vmdk
         * @param bool $full Create a full copy of all disks. This is always done when you clone a normal VM. For VM templates, we try to create a linked clone by default.
         * @param string $name Set a name for the new VM.
         * @param string $pool Add the new VM to the specified pool.
         * @param string $snapname The name of the snapshot.
         * @param string $storage Target storage for full clone.
         * @param string $target Target node. Only allowed if the original VM is on shared storage.
         * @return Result
         */
        public function createRest($newid, $bwlimit = null, $description = null, $format = null, $full = null, $name = null, $pool = null, $snapname = null, $storage = null, $target = null) {
            $params = ['newid' => $newid,
                'bwlimit' => $bwlimit,
                'description' => $description,
                'format' => $format,
                'full' => $full,
                'name' => $name,
                'pool' => $pool,
                'snapname' => $snapname,
                'storage' => $storage,
                'target' => $target];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/clone", $params);
        }

        /**
         * Create a copy of virtual machine/template.
         * @param int $newid VMID for the clone.
         * @param int $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param string $description Description for the new VM.
         * @param string $format Target format for file storage. Only valid for full clone.
         *   Enum: raw,qcow2,vmdk
         * @param bool $full Create a full copy of all disks. This is always done when you clone a normal VM. For VM templates, we try to create a linked clone by default.
         * @param string $name Set a name for the new VM.
         * @param string $pool Add the new VM to the specified pool.
         * @param string $snapname The name of the snapshot.
         * @param string $storage Target storage for full clone.
         * @param string $target Target node. Only allowed if the original VM is on shared storage.
         * @return Result
         */
        public function cloneVm($newid, $bwlimit = null, $description = null, $format = null, $full = null, $name = null, $pool = null, $snapname = null, $storage = null, $target = null) {
            return $this->createRest($newid, $bwlimit, $description, $format, $full, $name, $pool, $snapname, $storage, $target);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesMoveDisk
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesMoveDisk {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Move volume to different storage.
         * @param string $disk The disk you want to move.
         *   Enum: ide0,ide1,ide2,ide3,scsi0,scsi1,scsi2,scsi3,scsi4,scsi5,scsi6,scsi7,scsi8,scsi9,scsi10,scsi11,scsi12,scsi13,scsi14,scsi15,scsi16,scsi17,scsi18,scsi19,scsi20,scsi21,scsi22,scsi23,scsi24,scsi25,scsi26,scsi27,scsi28,scsi29,scsi30,virtio0,virtio1,virtio2,virtio3,virtio4,virtio5,virtio6,virtio7,virtio8,virtio9,virtio10,virtio11,virtio12,virtio13,virtio14,virtio15,sata0,sata1,sata2,sata3,sata4,sata5,efidisk0
         * @param string $storage Target storage.
         * @param int $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param bool $delete Delete the original disk after successful copy. By default the original disk is kept as unused disk.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $format Target Format.
         *   Enum: raw,qcow2,vmdk
         * @return Result
         */
        public function createRest($disk, $storage, $bwlimit = null, $delete = null, $digest = null, $format = null) {
            $params = ['disk' => $disk,
                'storage' => $storage,
                'bwlimit' => $bwlimit,
                'delete' => $delete,
                'digest' => $digest,
                'format' => $format];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/move_disk", $params);
        }

        /**
         * Move volume to different storage.
         * @param string $disk The disk you want to move.
         *   Enum: ide0,ide1,ide2,ide3,scsi0,scsi1,scsi2,scsi3,scsi4,scsi5,scsi6,scsi7,scsi8,scsi9,scsi10,scsi11,scsi12,scsi13,scsi14,scsi15,scsi16,scsi17,scsi18,scsi19,scsi20,scsi21,scsi22,scsi23,scsi24,scsi25,scsi26,scsi27,scsi28,scsi29,scsi30,virtio0,virtio1,virtio2,virtio3,virtio4,virtio5,virtio6,virtio7,virtio8,virtio9,virtio10,virtio11,virtio12,virtio13,virtio14,virtio15,sata0,sata1,sata2,sata3,sata4,sata5,efidisk0
         * @param string $storage Target storage.
         * @param int $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param bool $delete Delete the original disk after successful copy. By default the original disk is kept as unused disk.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $format Target Format.
         *   Enum: raw,qcow2,vmdk
         * @return Result
         */
        public function moveVmDisk($disk, $storage, $bwlimit = null, $delete = null, $digest = null, $format = null) {
            return $this->createRest($disk, $storage, $bwlimit, $delete, $digest, $format);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesMigrate
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesMigrate {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get preconditions for migration.
         * @param string $target Target node.
         * @return Result
         */
        public function getRest($target = null) {
            $params = ['target' => $target];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/migrate", $params);
        }

        /**
         * Get preconditions for migration.
         * @param string $target Target node.
         * @return Result
         */
        public function migrateVmPrecondition($target = null) {
            return $this->getRest($target);
        }

        /**
         * Migrate virtual machine. Creates a new migration task.
         * @param string $target Target node.
         * @param int $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param bool $force Allow to migrate VMs which use local devices. Only root may use this option.
         * @param string $migration_network CIDR of the (sub) network that is used for migration.
         * @param string $migration_type Migration traffic is encrypted using an SSH tunnel by default. On secure, completely private networks this can be disabled to increase performance.
         *   Enum: secure,insecure
         * @param bool $online Use online/live migration if VM is running. Ignored if VM is stopped.
         * @param string $targetstorage Mapping from source to target storages. Providing only a single storage ID maps all source storages to that storage. Providing the special value '1' will map each source storage to itself.
         * @param bool $with_local_disks Enable live storage migration for local disk
         * @return Result
         */
        public function createRest($target, $bwlimit = null, $force = null, $migration_network = null, $migration_type = null, $online = null, $targetstorage = null, $with_local_disks = null) {
            $params = ['target' => $target,
                'bwlimit' => $bwlimit,
                'force' => $force,
                'migration_network' => $migration_network,
                'migration_type' => $migration_type,
                'online' => $online,
                'targetstorage' => $targetstorage,
                'with-local-disks' => $with_local_disks];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/migrate", $params);
        }

        /**
         * Migrate virtual machine. Creates a new migration task.
         * @param string $target Target node.
         * @param int $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param bool $force Allow to migrate VMs which use local devices. Only root may use this option.
         * @param string $migration_network CIDR of the (sub) network that is used for migration.
         * @param string $migration_type Migration traffic is encrypted using an SSH tunnel by default. On secure, completely private networks this can be disabled to increase performance.
         *   Enum: secure,insecure
         * @param bool $online Use online/live migration if VM is running. Ignored if VM is stopped.
         * @param string $targetstorage Mapping from source to target storages. Providing only a single storage ID maps all source storages to that storage. Providing the special value '1' will map each source storage to itself.
         * @param bool $with_local_disks Enable live storage migration for local disk
         * @return Result
         */
        public function migrateVm($target, $bwlimit = null, $force = null, $migration_network = null, $migration_type = null, $online = null, $targetstorage = null, $with_local_disks = null) {
            return $this->createRest($target, $bwlimit, $force, $migration_network, $migration_type, $online, $targetstorage, $with_local_disks);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesMonitor
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesMonitor {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Execute Qemu monitor commands.
         * @param string $command The monitor command.
         * @return Result
         */
        public function createRest($command) {
            $params = ['command' => $command];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/monitor", $params);
        }

        /**
         * Execute Qemu monitor commands.
         * @param string $command The monitor command.
         * @return Result
         */
        public function monitor($command) {
            return $this->createRest($command);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesResize
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesResize {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Extend volume size.
         * @param string $disk The disk you want to resize.
         *   Enum: ide0,ide1,ide2,ide3,scsi0,scsi1,scsi2,scsi3,scsi4,scsi5,scsi6,scsi7,scsi8,scsi9,scsi10,scsi11,scsi12,scsi13,scsi14,scsi15,scsi16,scsi17,scsi18,scsi19,scsi20,scsi21,scsi22,scsi23,scsi24,scsi25,scsi26,scsi27,scsi28,scsi29,scsi30,virtio0,virtio1,virtio2,virtio3,virtio4,virtio5,virtio6,virtio7,virtio8,virtio9,virtio10,virtio11,virtio12,virtio13,virtio14,virtio15,sata0,sata1,sata2,sata3,sata4,sata5,efidisk0
         * @param string $size The new size. With the `+` sign the value is added to the actual size of the volume and without it, the value is taken as an absolute one. Shrinking disk size is not supported.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function setRest($disk, $size, $digest = null, $skiplock = null) {
            $params = ['disk' => $disk,
                'size' => $size,
                'digest' => $digest,
                'skiplock' => $skiplock];
            return $this->client->set("/nodes/{$this->node}/qemu/{$this->vmid}/resize", $params);
        }

        /**
         * Extend volume size.
         * @param string $disk The disk you want to resize.
         *   Enum: ide0,ide1,ide2,ide3,scsi0,scsi1,scsi2,scsi3,scsi4,scsi5,scsi6,scsi7,scsi8,scsi9,scsi10,scsi11,scsi12,scsi13,scsi14,scsi15,scsi16,scsi17,scsi18,scsi19,scsi20,scsi21,scsi22,scsi23,scsi24,scsi25,scsi26,scsi27,scsi28,scsi29,scsi30,virtio0,virtio1,virtio2,virtio3,virtio4,virtio5,virtio6,virtio7,virtio8,virtio9,virtio10,virtio11,virtio12,virtio13,virtio14,virtio15,sata0,sata1,sata2,sata3,sata4,sata5,efidisk0
         * @param string $size The new size. With the `+` sign the value is added to the actual size of the volume and without it, the value is taken as an absolute one. Shrinking disk size is not supported.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function resizeVm($disk, $size, $digest = null, $skiplock = null) {
            return $this->setRest($disk, $size, $digest, $skiplock);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesSnapshot
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesSnapshot {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get ItemSnapshotVmidQemuNodeNodesSnapname
         * @param snapname
         * @return PVEItemSnapshotVmidQemuNodeNodesSnapname
         */
        public function get($snapname) {
            return new PVEItemSnapshotVmidQemuNodeNodesSnapname($this->client, $this->node, $this->vmid, $snapname);
        }

        /**
         * List all snapshots.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/snapshot");
        }

        /**
         * List all snapshots.
         * @return Result
         */
        public function snapshotList() {
            return $this->getRest();
        }

        /**
         * Snapshot a VM.
         * @param string $snapname The name of the snapshot.
         * @param string $description A textual description or comment.
         * @param bool $vmstate Save the vmstate
         * @return Result
         */
        public function createRest($snapname, $description = null, $vmstate = null) {
            $params = ['snapname' => $snapname,
                'description' => $description,
                'vmstate' => $vmstate];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/snapshot", $params);
        }

        /**
         * Snapshot a VM.
         * @param string $snapname The name of the snapshot.
         * @param string $description A textual description or comment.
         * @param bool $vmstate Save the vmstate
         * @return Result
         */
        public function snapshot($snapname, $description = null, $vmstate = null) {
            return $this->createRest($snapname, $description, $vmstate);
        }

    }

    /**
     * Class PVEItemSnapshotVmidQemuNodeNodesSnapname
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemSnapshotVmidQemuNodeNodesSnapname {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $snapname;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $snapname) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->snapname = $snapname;
        }

        /**
         * @ignore
         */
        private $config;

        /**
         * Get SnapnameSnapshotVmidQemuNodeNodesConfig
         * @return PVESnapnameSnapshotVmidQemuNodeNodesConfig
         */
        public function getConfig() {
            return $this->config ?: ($this->config = new PVESnapnameSnapshotVmidQemuNodeNodesConfig($this->client, $this->node, $this->vmid, $this->snapname));
        }

        /**
         * @ignore
         */
        private $rollback;

        /**
         * Get SnapnameSnapshotVmidQemuNodeNodesRollback
         * @return PVESnapnameSnapshotVmidQemuNodeNodesRollback
         */
        public function getRollback() {
            return $this->rollback ?: ($this->rollback = new PVESnapnameSnapshotVmidQemuNodeNodesRollback($this->client, $this->node, $this->vmid, $this->snapname));
        }

        /**
         * Delete a VM snapshot.
         * @param bool $force For removal from config file, even if removing disk snapshots fails.
         * @return Result
         */
        public function deleteRest($force = null) {
            $params = ['force' => $force];
            return $this->client->delete("/nodes/{$this->node}/qemu/{$this->vmid}/snapshot/{$this->snapname}", $params);
        }

        /**
         * Delete a VM snapshot.
         * @param bool $force For removal from config file, even if removing disk snapshots fails.
         * @return Result
         */
        public function delsnapshot($force = null) {
            return $this->deleteRest($force);
        }

        /**
         * 
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/snapshot/{$this->snapname}");
        }

        /**
         * 
         * @return Result
         */
        public function snapshotCmdIdx() {
            return $this->getRest();
        }

    }

    /**
     * Class PVESnapnameSnapshotVmidQemuNodeNodesConfig
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESnapnameSnapshotVmidQemuNodeNodesConfig {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $snapname;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $snapname) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->snapname = $snapname;
        }

        /**
         * Get snapshot configuration
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/snapshot/{$this->snapname}/config");
        }

        /**
         * Get snapshot configuration
         * @return Result
         */
        public function getSnapshotConfig() {
            return $this->getRest();
        }

        /**
         * Update snapshot metadata.
         * @param string $description A textual description or comment.
         * @return Result
         */
        public function setRest($description = null) {
            $params = ['description' => $description];
            return $this->client->set("/nodes/{$this->node}/qemu/{$this->vmid}/snapshot/{$this->snapname}/config", $params);
        }

        /**
         * Update snapshot metadata.
         * @param string $description A textual description or comment.
         * @return Result
         */
        public function updateSnapshotConfig($description = null) {
            return $this->setRest($description);
        }

    }

    /**
     * Class PVESnapnameSnapshotVmidQemuNodeNodesRollback
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESnapnameSnapshotVmidQemuNodeNodesRollback {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $snapname;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $snapname) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->snapname = $snapname;
        }

        /**
         * Rollback VM state to specified snapshot.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/snapshot/{$this->snapname}/rollback");
        }

        /**
         * Rollback VM state to specified snapshot.
         * @return Result
         */
        public function rollback() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesTemplate
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesTemplate {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Create a Template.
         * @param string $disk If you want to convert only 1 disk to base image.
         *   Enum: ide0,ide1,ide2,ide3,scsi0,scsi1,scsi2,scsi3,scsi4,scsi5,scsi6,scsi7,scsi8,scsi9,scsi10,scsi11,scsi12,scsi13,scsi14,scsi15,scsi16,scsi17,scsi18,scsi19,scsi20,scsi21,scsi22,scsi23,scsi24,scsi25,scsi26,scsi27,scsi28,scsi29,scsi30,virtio0,virtio1,virtio2,virtio3,virtio4,virtio5,virtio6,virtio7,virtio8,virtio9,virtio10,virtio11,virtio12,virtio13,virtio14,virtio15,sata0,sata1,sata2,sata3,sata4,sata5,efidisk0
         * @return Result
         */
        public function createRest($disk = null) {
            $params = ['disk' => $disk];
            return $this->client->create("/nodes/{$this->node}/qemu/{$this->vmid}/template", $params);
        }

        /**
         * Create a Template.
         * @param string $disk If you want to convert only 1 disk to base image.
         *   Enum: ide0,ide1,ide2,ide3,scsi0,scsi1,scsi2,scsi3,scsi4,scsi5,scsi6,scsi7,scsi8,scsi9,scsi10,scsi11,scsi12,scsi13,scsi14,scsi15,scsi16,scsi17,scsi18,scsi19,scsi20,scsi21,scsi22,scsi23,scsi24,scsi25,scsi26,scsi27,scsi28,scsi29,scsi30,virtio0,virtio1,virtio2,virtio3,virtio4,virtio5,virtio6,virtio7,virtio8,virtio9,virtio10,virtio11,virtio12,virtio13,virtio14,virtio15,sata0,sata1,sata2,sata3,sata4,sata5,efidisk0
         * @return Result
         */
        public function template($disk = null) {
            return $this->createRest($disk);
        }

    }

    /**
     * Class PVEVmidQemuNodeNodesCloudinit
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidQemuNodeNodesCloudinit {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * @ignore
         */
        private $dump;

        /**
         * Get CloudinitVmidQemuNodeNodesDump
         * @return PVECloudinitVmidQemuNodeNodesDump
         */
        public function getDump() {
            return $this->dump ?: ($this->dump = new PVECloudinitVmidQemuNodeNodesDump($this->client, $this->node, $this->vmid));
        }

    }

    /**
     * Class PVECloudinitVmidQemuNodeNodesDump
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECloudinitVmidQemuNodeNodesDump {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get automatically generated cloudinit config.
         * @param string $type Config type.
         *   Enum: user,network,meta
         * @return Result
         */
        public function getRest($type) {
            $params = ['type' => $type];
            return $this->client->get("/nodes/{$this->node}/qemu/{$this->vmid}/cloudinit/dump", $params);
        }

        /**
         * Get automatically generated cloudinit config.
         * @param string $type Config type.
         *   Enum: user,network,meta
         * @return Result
         */
        public function cloudinitGeneratedConfigDump($type) {
            return $this->getRest($type);
        }

    }

    /**
     * Class PVENodeNodesLxc
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesLxc {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemLxcNodeNodesVmid
         * @param vmid
         * @return PVEItemLxcNodeNodesVmid
         */
        public function get($vmid) {
            return new PVEItemLxcNodeNodesVmid($this->client, $this->node, $vmid);
        }

        /**
         * LXC container index (per node).
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc");
        }

        /**
         * LXC container index (per node).
         * @return Result
         */
        public function vmlist() {
            return $this->getRest();
        }

        /**
         * Create or restore a container.
         * @param string $ostemplate The OS template or backup file.
         * @param int $vmid The (unique) ID of the VM.
         * @param string $arch OS architecture type.
         *   Enum: amd64,i386,arm64,armhf
         * @param float $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param string $cmode Console mode. By default, the console command tries to open a connection to one of the available tty devices. By setting cmode to 'console' it tries to attach to /dev/console instead. If you set cmode to 'shell', it simply invokes a shell inside the container (no login).
         *   Enum: shell,console,tty
         * @param bool $console Attach a console device (/dev/console) to the container.
         * @param int $cores The number of cores assigned to the container. A container can use all available cores by default.
         * @param float $cpulimit Limit of CPU usage.  NOTE: If the computer has 2 CPUs, it has a total of '2' CPU time. Value '0' indicates no CPU limit.
         * @param int $cpuunits CPU weight for a VM. Argument is used in the kernel fair scheduler. The larger the number is, the more CPU time this VM gets. Number is relative to the weights of all the other running VMs.  NOTE: You can disable fair-scheduler configuration by setting this to 0.
         * @param bool $debug Try to be more verbose. For now this only enables debug log-level on start.
         * @param string $description Description for the Container. Shown in the web-interface CT's summary. This is saved as comment inside the configuration file.
         * @param string $features Allow containers access to advanced features.
         * @param bool $force Allow to overwrite existing container.
         * @param string $hookscript Script that will be exectued during various steps in the containers lifetime.
         * @param string $hostname Set a host name for the container.
         * @param bool $ignore_unpack_errors Ignore errors when extracting the template.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,create,destroyed,disk,fstrim,migrate,mounted,rollback,snapshot,snapshot-delete
         * @param int $memory Amount of RAM for the VM in MB.
         * @param array $mpN Use volume as container mount point. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $nameserver Sets DNS server IP address for a container. Create will automatically use the setting from the host if you neither set searchdomain nor nameserver.
         * @param array $netN Specifies network interfaces for the container.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype OS type. This is used to setup configuration inside the container, and corresponds to lxc setup scripts in /usr/share/lxc/config/&amp;lt;ostype&amp;gt;.common.conf. Value 'unmanaged' can be used to skip and OS specific setup.
         *   Enum: debian,devuan,ubuntu,centos,fedora,opensuse,archlinux,alpine,gentoo,unmanaged
         * @param string $password Sets root password inside container.
         * @param string $pool Add the VM to the specified pool.
         * @param bool $protection Sets the protection flag of the container. This will prevent the CT or CT's disk remove/update operation.
         * @param bool $restore Mark this as restore task.
         * @param string $rootfs Use volume as container root.
         * @param string $searchdomain Sets DNS search domains for a container. Create will automatically use the setting from the host if you neither set searchdomain nor nameserver.
         * @param string $ssh_public_keys Setup public SSH keys (one key per line, OpenSSH format).
         * @param bool $start Start the CT after its creation finished successfully.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param string $storage Default Storage.
         * @param int $swap Amount of SWAP for the VM in MB.
         * @param string $tags Tags of the Container. This is only meta information.
         * @param bool $template Enable/disable Template.
         * @param string $timezone Time zone to use in the container. If option isn't set, then nothing will be done. Can be set to 'host' to match the host time zone, or an arbitrary time zone option from /usr/share/zoneinfo/zone.tab
         * @param int $tty Specify the number of tty available to the container
         * @param bool $unique Assign a unique random ethernet address.
         * @param bool $unprivileged Makes the container run as unprivileged user. (Should not be modified manually.)
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @return Result
         */
        public function createRest($ostemplate, $vmid, $arch = null, $bwlimit = null, $cmode = null, $console = null, $cores = null, $cpulimit = null, $cpuunits = null, $debug = null, $description = null, $features = null, $force = null, $hookscript = null, $hostname = null, $ignore_unpack_errors = null, $lock = null, $memory = null, $mpN = null, $nameserver = null, $netN = null, $onboot = null, $ostype = null, $password = null, $pool = null, $protection = null, $restore = null, $rootfs = null, $searchdomain = null, $ssh_public_keys = null, $start = null, $startup = null, $storage = null, $swap = null, $tags = null, $template = null, $timezone = null, $tty = null, $unique = null, $unprivileged = null, $unusedN = null) {
            $params = ['ostemplate' => $ostemplate,
                'vmid' => $vmid,
                'arch' => $arch,
                'bwlimit' => $bwlimit,
                'cmode' => $cmode,
                'console' => $console,
                'cores' => $cores,
                'cpulimit' => $cpulimit,
                'cpuunits' => $cpuunits,
                'debug' => $debug,
                'description' => $description,
                'features' => $features,
                'force' => $force,
                'hookscript' => $hookscript,
                'hostname' => $hostname,
                'ignore-unpack-errors' => $ignore_unpack_errors,
                'lock' => $lock,
                'memory' => $memory,
                'nameserver' => $nameserver,
                'onboot' => $onboot,
                'ostype' => $ostype,
                'password' => $password,
                'pool' => $pool,
                'protection' => $protection,
                'restore' => $restore,
                'rootfs' => $rootfs,
                'searchdomain' => $searchdomain,
                'ssh-public-keys' => $ssh_public_keys,
                'start' => $start,
                'startup' => $startup,
                'storage' => $storage,
                'swap' => $swap,
                'tags' => $tags,
                'template' => $template,
                'timezone' => $timezone,
                'tty' => $tty,
                'unique' => $unique,
                'unprivileged' => $unprivileged];
            $this->client->addIndexedParameter($params, 'mp', $mpN);
            $this->client->addIndexedParameter($params, 'net', $netN);
            $this->client->addIndexedParameter($params, 'unused', $unusedN);
            return $this->client->create("/nodes/{$this->node}/lxc", $params);
        }

        /**
         * Create or restore a container.
         * @param string $ostemplate The OS template or backup file.
         * @param int $vmid The (unique) ID of the VM.
         * @param string $arch OS architecture type.
         *   Enum: amd64,i386,arm64,armhf
         * @param float $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param string $cmode Console mode. By default, the console command tries to open a connection to one of the available tty devices. By setting cmode to 'console' it tries to attach to /dev/console instead. If you set cmode to 'shell', it simply invokes a shell inside the container (no login).
         *   Enum: shell,console,tty
         * @param bool $console Attach a console device (/dev/console) to the container.
         * @param int $cores The number of cores assigned to the container. A container can use all available cores by default.
         * @param float $cpulimit Limit of CPU usage.  NOTE: If the computer has 2 CPUs, it has a total of '2' CPU time. Value '0' indicates no CPU limit.
         * @param int $cpuunits CPU weight for a VM. Argument is used in the kernel fair scheduler. The larger the number is, the more CPU time this VM gets. Number is relative to the weights of all the other running VMs.  NOTE: You can disable fair-scheduler configuration by setting this to 0.
         * @param bool $debug Try to be more verbose. For now this only enables debug log-level on start.
         * @param string $description Description for the Container. Shown in the web-interface CT's summary. This is saved as comment inside the configuration file.
         * @param string $features Allow containers access to advanced features.
         * @param bool $force Allow to overwrite existing container.
         * @param string $hookscript Script that will be exectued during various steps in the containers lifetime.
         * @param string $hostname Set a host name for the container.
         * @param bool $ignore_unpack_errors Ignore errors when extracting the template.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,create,destroyed,disk,fstrim,migrate,mounted,rollback,snapshot,snapshot-delete
         * @param int $memory Amount of RAM for the VM in MB.
         * @param array $mpN Use volume as container mount point. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $nameserver Sets DNS server IP address for a container. Create will automatically use the setting from the host if you neither set searchdomain nor nameserver.
         * @param array $netN Specifies network interfaces for the container.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype OS type. This is used to setup configuration inside the container, and corresponds to lxc setup scripts in /usr/share/lxc/config/&amp;lt;ostype&amp;gt;.common.conf. Value 'unmanaged' can be used to skip and OS specific setup.
         *   Enum: debian,devuan,ubuntu,centos,fedora,opensuse,archlinux,alpine,gentoo,unmanaged
         * @param string $password Sets root password inside container.
         * @param string $pool Add the VM to the specified pool.
         * @param bool $protection Sets the protection flag of the container. This will prevent the CT or CT's disk remove/update operation.
         * @param bool $restore Mark this as restore task.
         * @param string $rootfs Use volume as container root.
         * @param string $searchdomain Sets DNS search domains for a container. Create will automatically use the setting from the host if you neither set searchdomain nor nameserver.
         * @param string $ssh_public_keys Setup public SSH keys (one key per line, OpenSSH format).
         * @param bool $start Start the CT after its creation finished successfully.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param string $storage Default Storage.
         * @param int $swap Amount of SWAP for the VM in MB.
         * @param string $tags Tags of the Container. This is only meta information.
         * @param bool $template Enable/disable Template.
         * @param string $timezone Time zone to use in the container. If option isn't set, then nothing will be done. Can be set to 'host' to match the host time zone, or an arbitrary time zone option from /usr/share/zoneinfo/zone.tab
         * @param int $tty Specify the number of tty available to the container
         * @param bool $unique Assign a unique random ethernet address.
         * @param bool $unprivileged Makes the container run as unprivileged user. (Should not be modified manually.)
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @return Result
         */
        public function createVm($ostemplate, $vmid, $arch = null, $bwlimit = null, $cmode = null, $console = null, $cores = null, $cpulimit = null, $cpuunits = null, $debug = null, $description = null, $features = null, $force = null, $hookscript = null, $hostname = null, $ignore_unpack_errors = null, $lock = null, $memory = null, $mpN = null, $nameserver = null, $netN = null, $onboot = null, $ostype = null, $password = null, $pool = null, $protection = null, $restore = null, $rootfs = null, $searchdomain = null, $ssh_public_keys = null, $start = null, $startup = null, $storage = null, $swap = null, $tags = null, $template = null, $timezone = null, $tty = null, $unique = null, $unprivileged = null, $unusedN = null) {
            return $this->createRest($ostemplate, $vmid, $arch, $bwlimit, $cmode, $console, $cores, $cpulimit, $cpuunits, $debug, $description, $features, $force, $hookscript, $hostname, $ignore_unpack_errors, $lock, $memory, $mpN, $nameserver, $netN, $onboot, $ostype, $password, $pool, $protection, $restore, $rootfs, $searchdomain, $ssh_public_keys, $start, $startup, $storage, $swap, $tags, $template, $timezone, $tty, $unique, $unprivileged, $unusedN);
        }

    }

    /**
     * Class PVEItemLxcNodeNodesVmid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemLxcNodeNodesVmid {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * @ignore
         */
        private $config;

        /**
         * Get VmidLxcNodeNodesConfig
         * @return PVEVmidLxcNodeNodesConfig
         */
        public function getConfig() {
            return $this->config ?: ($this->config = new PVEVmidLxcNodeNodesConfig($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get VmidLxcNodeNodesStatus
         * @return PVEVmidLxcNodeNodesStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVEVmidLxcNodeNodesStatus($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $snapshot;

        /**
         * Get VmidLxcNodeNodesSnapshot
         * @return PVEVmidLxcNodeNodesSnapshot
         */
        public function getSnapshot() {
            return $this->snapshot ?: ($this->snapshot = new PVEVmidLxcNodeNodesSnapshot($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $firewall;

        /**
         * Get VmidLxcNodeNodesFirewall
         * @return PVEVmidLxcNodeNodesFirewall
         */
        public function getFirewall() {
            return $this->firewall ?: ($this->firewall = new PVEVmidLxcNodeNodesFirewall($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $rrd;

        /**
         * Get VmidLxcNodeNodesRrd
         * @return PVEVmidLxcNodeNodesRrd
         */
        public function getRrd() {
            return $this->rrd ?: ($this->rrd = new PVEVmidLxcNodeNodesRrd($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $rrddata;

        /**
         * Get VmidLxcNodeNodesRrddata
         * @return PVEVmidLxcNodeNodesRrddata
         */
        public function getRrddata() {
            return $this->rrddata ?: ($this->rrddata = new PVEVmidLxcNodeNodesRrddata($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $vncproxy;

        /**
         * Get VmidLxcNodeNodesVncproxy
         * @return PVEVmidLxcNodeNodesVncproxy
         */
        public function getVncproxy() {
            return $this->vncproxy ?: ($this->vncproxy = new PVEVmidLxcNodeNodesVncproxy($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $termproxy;

        /**
         * Get VmidLxcNodeNodesTermproxy
         * @return PVEVmidLxcNodeNodesTermproxy
         */
        public function getTermproxy() {
            return $this->termproxy ?: ($this->termproxy = new PVEVmidLxcNodeNodesTermproxy($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $vncwebsocket;

        /**
         * Get VmidLxcNodeNodesVncwebsocket
         * @return PVEVmidLxcNodeNodesVncwebsocket
         */
        public function getVncwebsocket() {
            return $this->vncwebsocket ?: ($this->vncwebsocket = new PVEVmidLxcNodeNodesVncwebsocket($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $spiceproxy;

        /**
         * Get VmidLxcNodeNodesSpiceproxy
         * @return PVEVmidLxcNodeNodesSpiceproxy
         */
        public function getSpiceproxy() {
            return $this->spiceproxy ?: ($this->spiceproxy = new PVEVmidLxcNodeNodesSpiceproxy($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $migrate;

        /**
         * Get VmidLxcNodeNodesMigrate
         * @return PVEVmidLxcNodeNodesMigrate
         */
        public function getMigrate() {
            return $this->migrate ?: ($this->migrate = new PVEVmidLxcNodeNodesMigrate($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $feature;

        /**
         * Get VmidLxcNodeNodesFeature
         * @return PVEVmidLxcNodeNodesFeature
         */
        public function getFeature() {
            return $this->feature ?: ($this->feature = new PVEVmidLxcNodeNodesFeature($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $template;

        /**
         * Get VmidLxcNodeNodesTemplate
         * @return PVEVmidLxcNodeNodesTemplate
         */
        public function getTemplate() {
            return $this->template ?: ($this->template = new PVEVmidLxcNodeNodesTemplate($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $clone;

        /**
         * Get VmidLxcNodeNodesClone
         * @return PVEVmidLxcNodeNodesClone
         */
        public function getClone() {
            return $this->clone ?: ($this->clone = new PVEVmidLxcNodeNodesClone($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $resize;

        /**
         * Get VmidLxcNodeNodesResize
         * @return PVEVmidLxcNodeNodesResize
         */
        public function getResize() {
            return $this->resize ?: ($this->resize = new PVEVmidLxcNodeNodesResize($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $moveVolume;

        /**
         * Get VmidLxcNodeNodesMoveVolume
         * @return PVEVmidLxcNodeNodesMoveVolume
         */
        public function getMoveVolume() {
            return $this->moveVolume ?: ($this->moveVolume = new PVEVmidLxcNodeNodesMoveVolume($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $pending;

        /**
         * Get VmidLxcNodeNodesPending
         * @return PVEVmidLxcNodeNodesPending
         */
        public function getPending() {
            return $this->pending ?: ($this->pending = new PVEVmidLxcNodeNodesPending($this->client, $this->node, $this->vmid));
        }

        /**
         * Destroy the container (also delete all uses files).
         * @param bool $destroy_unreferenced_disks If set, destroy additionally all disks with the VMID from all enabled storages which are not referenced in the config.
         * @param bool $force Force destroy, even if running.
         * @param bool $purge Remove container from all related configurations. For example, backup jobs, replication jobs or HA. Related ACLs and Firewall entries will *always* be removed.
         * @return Result
         */
        public function deleteRest($destroy_unreferenced_disks = null, $force = null, $purge = null) {
            $params = ['destroy-unreferenced-disks' => $destroy_unreferenced_disks,
                'force' => $force,
                'purge' => $purge];
            return $this->client->delete("/nodes/{$this->node}/lxc/{$this->vmid}", $params);
        }

        /**
         * Destroy the container (also delete all uses files).
         * @param bool $destroy_unreferenced_disks If set, destroy additionally all disks with the VMID from all enabled storages which are not referenced in the config.
         * @param bool $force Force destroy, even if running.
         * @param bool $purge Remove container from all related configurations. For example, backup jobs, replication jobs or HA. Related ACLs and Firewall entries will *always* be removed.
         * @return Result
         */
        public function destroyVm($destroy_unreferenced_disks = null, $force = null, $purge = null) {
            return $this->deleteRest($destroy_unreferenced_disks, $force, $purge);
        }

        /**
         * Directory index
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}");
        }

        /**
         * Directory index
         * @return Result
         */
        public function vmdiridx() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesConfig
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesConfig {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get container configuration.
         * @param bool $current Get current values (instead of pending values).
         * @param string $snapshot Fetch config values from given snapshot.
         * @return Result
         */
        public function getRest($current = null, $snapshot = null) {
            $params = ['current' => $current,
                'snapshot' => $snapshot];
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/config", $params);
        }

        /**
         * Get container configuration.
         * @param bool $current Get current values (instead of pending values).
         * @param string $snapshot Fetch config values from given snapshot.
         * @return Result
         */
        public function vmConfig($current = null, $snapshot = null) {
            return $this->getRest($current, $snapshot);
        }

        /**
         * Set container options.
         * @param string $arch OS architecture type.
         *   Enum: amd64,i386,arm64,armhf
         * @param string $cmode Console mode. By default, the console command tries to open a connection to one of the available tty devices. By setting cmode to 'console' it tries to attach to /dev/console instead. If you set cmode to 'shell', it simply invokes a shell inside the container (no login).
         *   Enum: shell,console,tty
         * @param bool $console Attach a console device (/dev/console) to the container.
         * @param int $cores The number of cores assigned to the container. A container can use all available cores by default.
         * @param float $cpulimit Limit of CPU usage.  NOTE: If the computer has 2 CPUs, it has a total of '2' CPU time. Value '0' indicates no CPU limit.
         * @param int $cpuunits CPU weight for a VM. Argument is used in the kernel fair scheduler. The larger the number is, the more CPU time this VM gets. Number is relative to the weights of all the other running VMs.  NOTE: You can disable fair-scheduler configuration by setting this to 0.
         * @param bool $debug Try to be more verbose. For now this only enables debug log-level on start.
         * @param string $delete A list of settings you want to delete.
         * @param string $description Description for the Container. Shown in the web-interface CT's summary. This is saved as comment inside the configuration file.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $features Allow containers access to advanced features.
         * @param string $hookscript Script that will be exectued during various steps in the containers lifetime.
         * @param string $hostname Set a host name for the container.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,create,destroyed,disk,fstrim,migrate,mounted,rollback,snapshot,snapshot-delete
         * @param int $memory Amount of RAM for the VM in MB.
         * @param array $mpN Use volume as container mount point. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $nameserver Sets DNS server IP address for a container. Create will automatically use the setting from the host if you neither set searchdomain nor nameserver.
         * @param array $netN Specifies network interfaces for the container.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype OS type. This is used to setup configuration inside the container, and corresponds to lxc setup scripts in /usr/share/lxc/config/&amp;lt;ostype&amp;gt;.common.conf. Value 'unmanaged' can be used to skip and OS specific setup.
         *   Enum: debian,devuan,ubuntu,centos,fedora,opensuse,archlinux,alpine,gentoo,unmanaged
         * @param bool $protection Sets the protection flag of the container. This will prevent the CT or CT's disk remove/update operation.
         * @param string $revert Revert a pending change.
         * @param string $rootfs Use volume as container root.
         * @param string $searchdomain Sets DNS search domains for a container. Create will automatically use the setting from the host if you neither set searchdomain nor nameserver.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param int $swap Amount of SWAP for the VM in MB.
         * @param string $tags Tags of the Container. This is only meta information.
         * @param bool $template Enable/disable Template.
         * @param string $timezone Time zone to use in the container. If option isn't set, then nothing will be done. Can be set to 'host' to match the host time zone, or an arbitrary time zone option from /usr/share/zoneinfo/zone.tab
         * @param int $tty Specify the number of tty available to the container
         * @param bool $unprivileged Makes the container run as unprivileged user. (Should not be modified manually.)
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @return Result
         */
        public function setRest($arch = null, $cmode = null, $console = null, $cores = null, $cpulimit = null, $cpuunits = null, $debug = null, $delete = null, $description = null, $digest = null, $features = null, $hookscript = null, $hostname = null, $lock = null, $memory = null, $mpN = null, $nameserver = null, $netN = null, $onboot = null, $ostype = null, $protection = null, $revert = null, $rootfs = null, $searchdomain = null, $startup = null, $swap = null, $tags = null, $template = null, $timezone = null, $tty = null, $unprivileged = null, $unusedN = null) {
            $params = ['arch' => $arch,
                'cmode' => $cmode,
                'console' => $console,
                'cores' => $cores,
                'cpulimit' => $cpulimit,
                'cpuunits' => $cpuunits,
                'debug' => $debug,
                'delete' => $delete,
                'description' => $description,
                'digest' => $digest,
                'features' => $features,
                'hookscript' => $hookscript,
                'hostname' => $hostname,
                'lock' => $lock,
                'memory' => $memory,
                'nameserver' => $nameserver,
                'onboot' => $onboot,
                'ostype' => $ostype,
                'protection' => $protection,
                'revert' => $revert,
                'rootfs' => $rootfs,
                'searchdomain' => $searchdomain,
                'startup' => $startup,
                'swap' => $swap,
                'tags' => $tags,
                'template' => $template,
                'timezone' => $timezone,
                'tty' => $tty,
                'unprivileged' => $unprivileged];
            $this->client->addIndexedParameter($params, 'mp', $mpN);
            $this->client->addIndexedParameter($params, 'net', $netN);
            $this->client->addIndexedParameter($params, 'unused', $unusedN);
            return $this->client->set("/nodes/{$this->node}/lxc/{$this->vmid}/config", $params);
        }

        /**
         * Set container options.
         * @param string $arch OS architecture type.
         *   Enum: amd64,i386,arm64,armhf
         * @param string $cmode Console mode. By default, the console command tries to open a connection to one of the available tty devices. By setting cmode to 'console' it tries to attach to /dev/console instead. If you set cmode to 'shell', it simply invokes a shell inside the container (no login).
         *   Enum: shell,console,tty
         * @param bool $console Attach a console device (/dev/console) to the container.
         * @param int $cores The number of cores assigned to the container. A container can use all available cores by default.
         * @param float $cpulimit Limit of CPU usage.  NOTE: If the computer has 2 CPUs, it has a total of '2' CPU time. Value '0' indicates no CPU limit.
         * @param int $cpuunits CPU weight for a VM. Argument is used in the kernel fair scheduler. The larger the number is, the more CPU time this VM gets. Number is relative to the weights of all the other running VMs.  NOTE: You can disable fair-scheduler configuration by setting this to 0.
         * @param bool $debug Try to be more verbose. For now this only enables debug log-level on start.
         * @param string $delete A list of settings you want to delete.
         * @param string $description Description for the Container. Shown in the web-interface CT's summary. This is saved as comment inside the configuration file.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $features Allow containers access to advanced features.
         * @param string $hookscript Script that will be exectued during various steps in the containers lifetime.
         * @param string $hostname Set a host name for the container.
         * @param string $lock Lock/unlock the VM.
         *   Enum: backup,create,destroyed,disk,fstrim,migrate,mounted,rollback,snapshot,snapshot-delete
         * @param int $memory Amount of RAM for the VM in MB.
         * @param array $mpN Use volume as container mount point. Use the special syntax STORAGE_ID:SIZE_IN_GiB to allocate a new volume.
         * @param string $nameserver Sets DNS server IP address for a container. Create will automatically use the setting from the host if you neither set searchdomain nor nameserver.
         * @param array $netN Specifies network interfaces for the container.
         * @param bool $onboot Specifies whether a VM will be started during system bootup.
         * @param string $ostype OS type. This is used to setup configuration inside the container, and corresponds to lxc setup scripts in /usr/share/lxc/config/&amp;lt;ostype&amp;gt;.common.conf. Value 'unmanaged' can be used to skip and OS specific setup.
         *   Enum: debian,devuan,ubuntu,centos,fedora,opensuse,archlinux,alpine,gentoo,unmanaged
         * @param bool $protection Sets the protection flag of the container. This will prevent the CT or CT's disk remove/update operation.
         * @param string $revert Revert a pending change.
         * @param string $rootfs Use volume as container root.
         * @param string $searchdomain Sets DNS search domains for a container. Create will automatically use the setting from the host if you neither set searchdomain nor nameserver.
         * @param string $startup Startup and shutdown behavior. Order is a non-negative number defining the general startup order. Shutdown in done with reverse ordering. Additionally you can set the 'up' or 'down' delay in seconds, which specifies a delay to wait before the next VM is started or stopped.
         * @param int $swap Amount of SWAP for the VM in MB.
         * @param string $tags Tags of the Container. This is only meta information.
         * @param bool $template Enable/disable Template.
         * @param string $timezone Time zone to use in the container. If option isn't set, then nothing will be done. Can be set to 'host' to match the host time zone, or an arbitrary time zone option from /usr/share/zoneinfo/zone.tab
         * @param int $tty Specify the number of tty available to the container
         * @param bool $unprivileged Makes the container run as unprivileged user. (Should not be modified manually.)
         * @param array $unusedN Reference to unused volumes. This is used internally, and should not be modified manually.
         * @return Result
         */
        public function updateVm($arch = null, $cmode = null, $console = null, $cores = null, $cpulimit = null, $cpuunits = null, $debug = null, $delete = null, $description = null, $digest = null, $features = null, $hookscript = null, $hostname = null, $lock = null, $memory = null, $mpN = null, $nameserver = null, $netN = null, $onboot = null, $ostype = null, $protection = null, $revert = null, $rootfs = null, $searchdomain = null, $startup = null, $swap = null, $tags = null, $template = null, $timezone = null, $tty = null, $unprivileged = null, $unusedN = null) {
            return $this->setRest($arch, $cmode, $console, $cores, $cpulimit, $cpuunits, $debug, $delete, $description, $digest, $features, $hookscript, $hostname, $lock, $memory, $mpN, $nameserver, $netN, $onboot, $ostype, $protection, $revert, $rootfs, $searchdomain, $startup, $swap, $tags, $template, $timezone, $tty, $unprivileged, $unusedN);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesStatus {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * @ignore
         */
        private $current;

        /**
         * Get StatusVmidLxcNodeNodesCurrent
         * @return PVEStatusVmidLxcNodeNodesCurrent
         */
        public function getCurrent() {
            return $this->current ?: ($this->current = new PVEStatusVmidLxcNodeNodesCurrent($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $start;

        /**
         * Get StatusVmidLxcNodeNodesStart
         * @return PVEStatusVmidLxcNodeNodesStart
         */
        public function getStart() {
            return $this->start ?: ($this->start = new PVEStatusVmidLxcNodeNodesStart($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $stop;

        /**
         * Get StatusVmidLxcNodeNodesStop
         * @return PVEStatusVmidLxcNodeNodesStop
         */
        public function getStop() {
            return $this->stop ?: ($this->stop = new PVEStatusVmidLxcNodeNodesStop($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $shutdown;

        /**
         * Get StatusVmidLxcNodeNodesShutdown
         * @return PVEStatusVmidLxcNodeNodesShutdown
         */
        public function getShutdown() {
            return $this->shutdown ?: ($this->shutdown = new PVEStatusVmidLxcNodeNodesShutdown($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $suspend;

        /**
         * Get StatusVmidLxcNodeNodesSuspend
         * @return PVEStatusVmidLxcNodeNodesSuspend
         */
        public function getSuspend() {
            return $this->suspend ?: ($this->suspend = new PVEStatusVmidLxcNodeNodesSuspend($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $resume;

        /**
         * Get StatusVmidLxcNodeNodesResume
         * @return PVEStatusVmidLxcNodeNodesResume
         */
        public function getResume() {
            return $this->resume ?: ($this->resume = new PVEStatusVmidLxcNodeNodesResume($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $reboot;

        /**
         * Get StatusVmidLxcNodeNodesReboot
         * @return PVEStatusVmidLxcNodeNodesReboot
         */
        public function getReboot() {
            return $this->reboot ?: ($this->reboot = new PVEStatusVmidLxcNodeNodesReboot($this->client, $this->node, $this->vmid));
        }

        /**
         * Directory index
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/status");
        }

        /**
         * Directory index
         * @return Result
         */
        public function vmcmdidx() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEStatusVmidLxcNodeNodesCurrent
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidLxcNodeNodesCurrent {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get virtual machine status.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/status/current");
        }

        /**
         * Get virtual machine status.
         * @return Result
         */
        public function vmStatus() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEStatusVmidLxcNodeNodesStart
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidLxcNodeNodesStart {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Start the container.
         * @param bool $debug If set, enables very verbose debug log-level on start.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function createRest($debug = null, $skiplock = null) {
            $params = ['debug' => $debug,
                'skiplock' => $skiplock];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/status/start", $params);
        }

        /**
         * Start the container.
         * @param bool $debug If set, enables very verbose debug log-level on start.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function vmStart($debug = null, $skiplock = null) {
            return $this->createRest($debug, $skiplock);
        }

    }

    /**
     * Class PVEStatusVmidLxcNodeNodesStop
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidLxcNodeNodesStop {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Stop the container. This will abruptly stop all processes running in the container.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function createRest($skiplock = null) {
            $params = ['skiplock' => $skiplock];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/status/stop", $params);
        }

        /**
         * Stop the container. This will abruptly stop all processes running in the container.
         * @param bool $skiplock Ignore locks - only root is allowed to use this option.
         * @return Result
         */
        public function vmStop($skiplock = null) {
            return $this->createRest($skiplock);
        }

    }

    /**
     * Class PVEStatusVmidLxcNodeNodesShutdown
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidLxcNodeNodesShutdown {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Shutdown the container. This will trigger a clean shutdown of the container, see lxc-stop(1) for details.
         * @param bool $forceStop Make sure the Container stops.
         * @param int $timeout Wait maximal timeout seconds.
         * @return Result
         */
        public function createRest($forceStop = null, $timeout = null) {
            $params = ['forceStop' => $forceStop,
                'timeout' => $timeout];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/status/shutdown", $params);
        }

        /**
         * Shutdown the container. This will trigger a clean shutdown of the container, see lxc-stop(1) for details.
         * @param bool $forceStop Make sure the Container stops.
         * @param int $timeout Wait maximal timeout seconds.
         * @return Result
         */
        public function vmShutdown($forceStop = null, $timeout = null) {
            return $this->createRest($forceStop, $timeout);
        }

    }

    /**
     * Class PVEStatusVmidLxcNodeNodesSuspend
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidLxcNodeNodesSuspend {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Suspend the container.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/status/suspend");
        }

        /**
         * Suspend the container.
         * @return Result
         */
        public function vmSuspend() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEStatusVmidLxcNodeNodesResume
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidLxcNodeNodesResume {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Resume the container.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/status/resume");
        }

        /**
         * Resume the container.
         * @return Result
         */
        public function vmResume() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEStatusVmidLxcNodeNodesReboot
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStatusVmidLxcNodeNodesReboot {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Reboot the container by shutting it down, and starting it again. Applies pending changes.
         * @param int $timeout Wait maximal timeout seconds for the shutdown.
         * @return Result
         */
        public function createRest($timeout = null) {
            $params = ['timeout' => $timeout];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/status/reboot", $params);
        }

        /**
         * Reboot the container by shutting it down, and starting it again. Applies pending changes.
         * @param int $timeout Wait maximal timeout seconds for the shutdown.
         * @return Result
         */
        public function vmReboot($timeout = null) {
            return $this->createRest($timeout);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesSnapshot
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesSnapshot {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get ItemSnapshotVmidLxcNodeNodesSnapname
         * @param snapname
         * @return PVEItemSnapshotVmidLxcNodeNodesSnapname
         */
        public function get($snapname) {
            return new PVEItemSnapshotVmidLxcNodeNodesSnapname($this->client, $this->node, $this->vmid, $snapname);
        }

        /**
         * List all snapshots.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/snapshot");
        }

        /**
         * List all snapshots.
         * @return Result
         */
        public function list_() {
            return $this->getRest();
        }

        /**
         * Snapshot a container.
         * @param string $snapname The name of the snapshot.
         * @param string $description A textual description or comment.
         * @return Result
         */
        public function createRest($snapname, $description = null) {
            $params = ['snapname' => $snapname,
                'description' => $description];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/snapshot", $params);
        }

        /**
         * Snapshot a container.
         * @param string $snapname The name of the snapshot.
         * @param string $description A textual description or comment.
         * @return Result
         */
        public function snapshot($snapname, $description = null) {
            return $this->createRest($snapname, $description);
        }

    }

    /**
     * Class PVEItemSnapshotVmidLxcNodeNodesSnapname
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemSnapshotVmidLxcNodeNodesSnapname {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $snapname;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $snapname) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->snapname = $snapname;
        }

        /**
         * @ignore
         */
        private $rollback;

        /**
         * Get SnapnameSnapshotVmidLxcNodeNodesRollback
         * @return PVESnapnameSnapshotVmidLxcNodeNodesRollback
         */
        public function getRollback() {
            return $this->rollback ?: ($this->rollback = new PVESnapnameSnapshotVmidLxcNodeNodesRollback($this->client, $this->node, $this->vmid, $this->snapname));
        }

        /**
         * @ignore
         */
        private $config;

        /**
         * Get SnapnameSnapshotVmidLxcNodeNodesConfig
         * @return PVESnapnameSnapshotVmidLxcNodeNodesConfig
         */
        public function getConfig() {
            return $this->config ?: ($this->config = new PVESnapnameSnapshotVmidLxcNodeNodesConfig($this->client, $this->node, $this->vmid, $this->snapname));
        }

        /**
         * Delete a LXC snapshot.
         * @param bool $force For removal from config file, even if removing disk snapshots fails.
         * @return Result
         */
        public function deleteRest($force = null) {
            $params = ['force' => $force];
            return $this->client->delete("/nodes/{$this->node}/lxc/{$this->vmid}/snapshot/{$this->snapname}", $params);
        }

        /**
         * Delete a LXC snapshot.
         * @param bool $force For removal from config file, even if removing disk snapshots fails.
         * @return Result
         */
        public function delsnapshot($force = null) {
            return $this->deleteRest($force);
        }

        /**
         * 
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/snapshot/{$this->snapname}");
        }

        /**
         * 
         * @return Result
         */
        public function snapshotCmdIdx() {
            return $this->getRest();
        }

    }

    /**
     * Class PVESnapnameSnapshotVmidLxcNodeNodesRollback
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESnapnameSnapshotVmidLxcNodeNodesRollback {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $snapname;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $snapname) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->snapname = $snapname;
        }

        /**
         * Rollback LXC state to specified snapshot.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/snapshot/{$this->snapname}/rollback");
        }

        /**
         * Rollback LXC state to specified snapshot.
         * @return Result
         */
        public function rollback() {
            return $this->createRest();
        }

    }

    /**
     * Class PVESnapnameSnapshotVmidLxcNodeNodesConfig
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESnapnameSnapshotVmidLxcNodeNodesConfig {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $snapname;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $snapname) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->snapname = $snapname;
        }

        /**
         * Get snapshot configuration
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/snapshot/{$this->snapname}/config");
        }

        /**
         * Get snapshot configuration
         * @return Result
         */
        public function getSnapshotConfig() {
            return $this->getRest();
        }

        /**
         * Update snapshot metadata.
         * @param string $description A textual description or comment.
         * @return Result
         */
        public function setRest($description = null) {
            $params = ['description' => $description];
            return $this->client->set("/nodes/{$this->node}/lxc/{$this->vmid}/snapshot/{$this->snapname}/config", $params);
        }

        /**
         * Update snapshot metadata.
         * @param string $description A textual description or comment.
         * @return Result
         */
        public function updateSnapshotConfig($description = null) {
            return $this->setRest($description);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesFirewall
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesFirewall {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * @ignore
         */
        private $rules;

        /**
         * Get FirewallVmidLxcNodeNodesRules
         * @return PVEFirewallVmidLxcNodeNodesRules
         */
        public function getRules() {
            return $this->rules ?: ($this->rules = new PVEFirewallVmidLxcNodeNodesRules($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $aliases;

        /**
         * Get FirewallVmidLxcNodeNodesAliases
         * @return PVEFirewallVmidLxcNodeNodesAliases
         */
        public function getAliases() {
            return $this->aliases ?: ($this->aliases = new PVEFirewallVmidLxcNodeNodesAliases($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $ipset;

        /**
         * Get FirewallVmidLxcNodeNodesIpset
         * @return PVEFirewallVmidLxcNodeNodesIpset
         */
        public function getIpset() {
            return $this->ipset ?: ($this->ipset = new PVEFirewallVmidLxcNodeNodesIpset($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $options;

        /**
         * Get FirewallVmidLxcNodeNodesOptions
         * @return PVEFirewallVmidLxcNodeNodesOptions
         */
        public function getOptions() {
            return $this->options ?: ($this->options = new PVEFirewallVmidLxcNodeNodesOptions($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $log;

        /**
         * Get FirewallVmidLxcNodeNodesLog
         * @return PVEFirewallVmidLxcNodeNodesLog
         */
        public function getLog() {
            return $this->log ?: ($this->log = new PVEFirewallVmidLxcNodeNodesLog($this->client, $this->node, $this->vmid));
        }

        /**
         * @ignore
         */
        private $refs;

        /**
         * Get FirewallVmidLxcNodeNodesRefs
         * @return PVEFirewallVmidLxcNodeNodesRefs
         */
        public function getRefs() {
            return $this->refs ?: ($this->refs = new PVEFirewallVmidLxcNodeNodesRefs($this->client, $this->node, $this->vmid));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEFirewallVmidLxcNodeNodesRules
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidLxcNodeNodesRules {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get ItemRulesFirewallVmidLxcNodeNodesPos
         * @param pos
         * @return PVEItemRulesFirewallVmidLxcNodeNodesPos
         */
        public function get($pos) {
            return new PVEItemRulesFirewallVmidLxcNodeNodesPos($this->client, $this->node, $this->vmid, $pos);
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/rules");
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRules() {
            return $this->getRest();
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRest($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            $params = ['action' => $action,
                'type' => $type,
                'comment' => $comment,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'pos' => $pos,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/rules", $params);
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRule($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            return $this->createRest($action, $type, $comment, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $pos, $proto, $source, $sport);
        }

    }

    /**
     * Class PVEItemRulesFirewallVmidLxcNodeNodesPos
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemRulesFirewallVmidLxcNodeNodesPos {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $pos;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $pos) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->pos = $pos;
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/rules/{$this->pos}", $params);
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRule($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/rules/{$this->pos}");
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRule() {
            return $this->getRest();
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function setRest($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            $params = ['action' => $action,
                'comment' => $comment,
                'delete' => $delete,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'moveto' => $moveto,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport,
                'type' => $type];
            return $this->client->set("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/rules/{$this->pos}", $params);
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function updateRule($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            return $this->setRest($action, $comment, $delete, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $moveto, $proto, $source, $sport, $type);
        }

    }

    /**
     * Class PVEFirewallVmidLxcNodeNodesAliases
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidLxcNodeNodesAliases {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get ItemAliasesFirewallVmidLxcNodeNodesName
         * @param name
         * @return PVEItemAliasesFirewallVmidLxcNodeNodesName
         */
        public function get($name) {
            return new PVEItemAliasesFirewallVmidLxcNodeNodesName($this->client, $this->node, $this->vmid, $name);
        }

        /**
         * List aliases
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/aliases");
        }

        /**
         * List aliases
         * @return Result
         */
        public function getAliases() {
            return $this->getRest();
        }

        /**
         * Create IP or Network Alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $name Alias name.
         * @param string $comment 
         * @return Result
         */
        public function createRest($cidr, $name, $comment = null) {
            $params = ['cidr' => $cidr,
                'name' => $name,
                'comment' => $comment];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/aliases", $params);
        }

        /**
         * Create IP or Network Alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $name Alias name.
         * @param string $comment 
         * @return Result
         */
        public function createAlias($cidr, $name, $comment = null) {
            return $this->createRest($cidr, $name, $comment);
        }

    }

    /**
     * Class PVEItemAliasesFirewallVmidLxcNodeNodesName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemAliasesFirewallVmidLxcNodeNodesName {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $name) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->name = $name;
        }

        /**
         * Remove IP or Network alias.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/aliases/{$this->name}", $params);
        }

        /**
         * Remove IP or Network alias.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function removeAlias($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Read alias.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/aliases/{$this->name}");
        }

        /**
         * Read alias.
         * @return Result
         */
        public function readAlias() {
            return $this->getRest();
        }

        /**
         * Update IP or Network alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing alias.
         * @return Result
         */
        public function setRest($cidr, $comment = null, $digest = null, $rename = null) {
            $params = ['cidr' => $cidr,
                'comment' => $comment,
                'digest' => $digest,
                'rename' => $rename];
            return $this->client->set("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/aliases/{$this->name}", $params);
        }

        /**
         * Update IP or Network alias.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing alias.
         * @return Result
         */
        public function updateAlias($cidr, $comment = null, $digest = null, $rename = null) {
            return $this->setRest($cidr, $comment, $digest, $rename);
        }

    }

    /**
     * Class PVEFirewallVmidLxcNodeNodesIpset
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidLxcNodeNodesIpset {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get ItemIpsetFirewallVmidLxcNodeNodesName
         * @param name
         * @return PVEItemIpsetFirewallVmidLxcNodeNodesName
         */
        public function get($name) {
            return new PVEItemIpsetFirewallVmidLxcNodeNodesName($this->client, $this->node, $this->vmid, $name);
        }

        /**
         * List IPSets
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/ipset");
        }

        /**
         * List IPSets
         * @return Result
         */
        public function ipsetIndex() {
            return $this->getRest();
        }

        /**
         * Create new IPSet
         * @param string $name IP set name.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing IPSet. You can set 'rename' to the same value as 'name' to update the 'comment' of an existing IPSet.
         * @return Result
         */
        public function createRest($name, $comment = null, $digest = null, $rename = null) {
            $params = ['name' => $name,
                'comment' => $comment,
                'digest' => $digest,
                'rename' => $rename];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/ipset", $params);
        }

        /**
         * Create new IPSet
         * @param string $name IP set name.
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $rename Rename an existing IPSet. You can set 'rename' to the same value as 'name' to update the 'comment' of an existing IPSet.
         * @return Result
         */
        public function createIpset($name, $comment = null, $digest = null, $rename = null) {
            return $this->createRest($name, $comment, $digest, $rename);
        }

    }

    /**
     * Class PVEItemIpsetFirewallVmidLxcNodeNodesName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemIpsetFirewallVmidLxcNodeNodesName {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $name) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->name = $name;
        }

        /**
         * Get ItemNameIpsetFirewallVmidLxcNodeNodesCidr
         * @param cidr
         * @return PVEItemNameIpsetFirewallVmidLxcNodeNodesCidr
         */
        public function get($cidr) {
            return new PVEItemNameIpsetFirewallVmidLxcNodeNodesCidr($this->client, $this->node, $this->vmid, $this->name, $cidr);
        }

        /**
         * Delete IPSet
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/ipset/{$this->name}");
        }

        /**
         * Delete IPSet
         * @return Result
         */
        public function deleteIpset() {
            return $this->deleteRest();
        }

        /**
         * List IPSet content
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/ipset/{$this->name}");
        }

        /**
         * List IPSet content
         * @return Result
         */
        public function getIpset() {
            return $this->getRest();
        }

        /**
         * Add IP or Network to IPSet.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param bool $nomatch 
         * @return Result
         */
        public function createRest($cidr, $comment = null, $nomatch = null) {
            $params = ['cidr' => $cidr,
                'comment' => $comment,
                'nomatch' => $nomatch];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/ipset/{$this->name}", $params);
        }

        /**
         * Add IP or Network to IPSet.
         * @param string $cidr Network/IP specification in CIDR format.
         * @param string $comment 
         * @param bool $nomatch 
         * @return Result
         */
        public function createIp($cidr, $comment = null, $nomatch = null) {
            return $this->createRest($cidr, $comment, $nomatch);
        }

    }

    /**
     * Class PVEItemNameIpsetFirewallVmidLxcNodeNodesCidr
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemNameIpsetFirewallVmidLxcNodeNodesCidr {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $cidr;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid, $name, $cidr) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
            $this->name = $name;
            $this->cidr = $cidr;
        }

        /**
         * Remove IP or Network from IPSet.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/ipset/{$this->name}/{$this->cidr}", $params);
        }

        /**
         * Remove IP or Network from IPSet.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function removeIp($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Read IP or Network settings from IPSet.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/ipset/{$this->name}/{$this->cidr}");
        }

        /**
         * Read IP or Network settings from IPSet.
         * @return Result
         */
        public function readIp() {
            return $this->getRest();
        }

        /**
         * Update IP or Network settings
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $nomatch 
         * @return Result
         */
        public function setRest($comment = null, $digest = null, $nomatch = null) {
            $params = ['comment' => $comment,
                'digest' => $digest,
                'nomatch' => $nomatch];
            return $this->client->set("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/ipset/{$this->name}/{$this->cidr}", $params);
        }

        /**
         * Update IP or Network settings
         * @param string $comment 
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $nomatch 
         * @return Result
         */
        public function updateIp($comment = null, $digest = null, $nomatch = null) {
            return $this->setRest($comment, $digest, $nomatch);
        }

    }

    /**
     * Class PVEFirewallVmidLxcNodeNodesOptions
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidLxcNodeNodesOptions {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get VM firewall options.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/options");
        }

        /**
         * Get VM firewall options.
         * @return Result
         */
        public function getOptions() {
            return $this->getRest();
        }

        /**
         * Set Firewall options.
         * @param string $delete A list of settings you want to delete.
         * @param bool $dhcp Enable DHCP.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $enable Enable/disable firewall rules.
         * @param bool $ipfilter Enable default IP filters. This is equivalent to adding an empty ipfilter-net&amp;lt;id&amp;gt; ipset for every interface. Such ipsets implicitly contain sane default restrictions such as restricting IPv6 link local addresses to the one derived from the interface's MAC address. For containers the configured IP addresses will be implicitly added.
         * @param string $log_level_in Log level for incoming traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $log_level_out Log level for outgoing traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param bool $macfilter Enable/disable MAC address filter.
         * @param bool $ndp Enable NDP (Neighbor Discovery Protocol).
         * @param string $policy_in Input policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param string $policy_out Output policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param bool $radv Allow sending Router Advertisement.
         * @return Result
         */
        public function setRest($delete = null, $dhcp = null, $digest = null, $enable = null, $ipfilter = null, $log_level_in = null, $log_level_out = null, $macfilter = null, $ndp = null, $policy_in = null, $policy_out = null, $radv = null) {
            $params = ['delete' => $delete,
                'dhcp' => $dhcp,
                'digest' => $digest,
                'enable' => $enable,
                'ipfilter' => $ipfilter,
                'log_level_in' => $log_level_in,
                'log_level_out' => $log_level_out,
                'macfilter' => $macfilter,
                'ndp' => $ndp,
                'policy_in' => $policy_in,
                'policy_out' => $policy_out,
                'radv' => $radv];
            return $this->client->set("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/options", $params);
        }

        /**
         * Set Firewall options.
         * @param string $delete A list of settings you want to delete.
         * @param bool $dhcp Enable DHCP.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $enable Enable/disable firewall rules.
         * @param bool $ipfilter Enable default IP filters. This is equivalent to adding an empty ipfilter-net&amp;lt;id&amp;gt; ipset for every interface. Such ipsets implicitly contain sane default restrictions such as restricting IPv6 link local addresses to the one derived from the interface's MAC address. For containers the configured IP addresses will be implicitly added.
         * @param string $log_level_in Log level for incoming traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $log_level_out Log level for outgoing traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param bool $macfilter Enable/disable MAC address filter.
         * @param bool $ndp Enable NDP (Neighbor Discovery Protocol).
         * @param string $policy_in Input policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param string $policy_out Output policy.
         *   Enum: ACCEPT,REJECT,DROP
         * @param bool $radv Allow sending Router Advertisement.
         * @return Result
         */
        public function setOptions($delete = null, $dhcp = null, $digest = null, $enable = null, $ipfilter = null, $log_level_in = null, $log_level_out = null, $macfilter = null, $ndp = null, $policy_in = null, $policy_out = null, $radv = null) {
            return $this->setRest($delete, $dhcp, $digest, $enable, $ipfilter, $log_level_in, $log_level_out, $macfilter, $ndp, $policy_in, $policy_out, $radv);
        }

    }

    /**
     * Class PVEFirewallVmidLxcNodeNodesLog
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidLxcNodeNodesLog {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Read firewall log
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function getRest($limit = null, $start = null) {
            $params = ['limit' => $limit,
                'start' => $start];
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/log", $params);
        }

        /**
         * Read firewall log
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function log($limit = null, $start = null) {
            return $this->getRest($limit, $start);
        }

    }

    /**
     * Class PVEFirewallVmidLxcNodeNodesRefs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallVmidLxcNodeNodesRefs {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Lists possible IPSet/Alias reference which are allowed in source/dest properties.
         * @param string $type Only list references of specified type.
         *   Enum: alias,ipset
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/firewall/refs", $params);
        }

        /**
         * Lists possible IPSet/Alias reference which are allowed in source/dest properties.
         * @param string $type Only list references of specified type.
         *   Enum: alias,ipset
         * @return Result
         */
        public function refs($type = null) {
            return $this->getRest($type);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesRrd
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesRrd {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Read VM RRD statistics (returns PNG)
         * @param string $ds The list of datasources you want to display.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function getRest($ds, $timeframe, $cf = null) {
            $params = ['ds' => $ds,
                'timeframe' => $timeframe,
                'cf' => $cf];
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/rrd", $params);
        }

        /**
         * Read VM RRD statistics (returns PNG)
         * @param string $ds The list of datasources you want to display.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function rrd($ds, $timeframe, $cf = null) {
            return $this->getRest($ds, $timeframe, $cf);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesRrddata
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesRrddata {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Read VM RRD statistics
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function getRest($timeframe, $cf = null) {
            $params = ['timeframe' => $timeframe,
                'cf' => $cf];
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/rrddata", $params);
        }

        /**
         * Read VM RRD statistics
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function rrddata($timeframe, $cf = null) {
            return $this->getRest($timeframe, $cf);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesVncproxy
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesVncproxy {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Creates a TCP VNC proxy connections.
         * @param int $height sets the height of the console in pixels.
         * @param bool $websocket use websocket instead of standard VNC.
         * @param int $width sets the width of the console in pixels.
         * @return Result
         */
        public function createRest($height = null, $websocket = null, $width = null) {
            $params = ['height' => $height,
                'websocket' => $websocket,
                'width' => $width];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/vncproxy", $params);
        }

        /**
         * Creates a TCP VNC proxy connections.
         * @param int $height sets the height of the console in pixels.
         * @param bool $websocket use websocket instead of standard VNC.
         * @param int $width sets the width of the console in pixels.
         * @return Result
         */
        public function vncproxy($height = null, $websocket = null, $width = null) {
            return $this->createRest($height, $websocket, $width);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesTermproxy
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesTermproxy {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Creates a TCP proxy connection.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/termproxy");
        }

        /**
         * Creates a TCP proxy connection.
         * @return Result
         */
        public function termproxy() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesVncwebsocket
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesVncwebsocket {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Opens a weksocket for VNC traffic.
         * @param int $port Port number returned by previous vncproxy call.
         * @param string $vncticket Ticket from previous call to vncproxy.
         * @return Result
         */
        public function getRest($port, $vncticket) {
            $params = ['port' => $port,
                'vncticket' => $vncticket];
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/vncwebsocket", $params);
        }

        /**
         * Opens a weksocket for VNC traffic.
         * @param int $port Port number returned by previous vncproxy call.
         * @param string $vncticket Ticket from previous call to vncproxy.
         * @return Result
         */
        public function vncwebsocket($port, $vncticket) {
            return $this->getRest($port, $vncticket);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesSpiceproxy
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesSpiceproxy {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Returns a SPICE configuration to connect to the CT.
         * @param string $proxy SPICE proxy server. This can be used by the client to specify the proxy server. All nodes in a cluster runs 'spiceproxy', so it is up to the client to choose one. By default, we return the node where the VM is currently running. As reasonable setting is to use same node you use to connect to the API (This is window.location.hostname for the JS GUI).
         * @return Result
         */
        public function createRest($proxy = null) {
            $params = ['proxy' => $proxy];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/spiceproxy", $params);
        }

        /**
         * Returns a SPICE configuration to connect to the CT.
         * @param string $proxy SPICE proxy server. This can be used by the client to specify the proxy server. All nodes in a cluster runs 'spiceproxy', so it is up to the client to choose one. By default, we return the node where the VM is currently running. As reasonable setting is to use same node you use to connect to the API (This is window.location.hostname for the JS GUI).
         * @return Result
         */
        public function spiceproxy($proxy = null) {
            return $this->createRest($proxy);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesMigrate
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesMigrate {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Migrate the container to another node. Creates a new migration task.
         * @param string $target Target node.
         * @param float $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param bool $online Use online/live migration.
         * @param bool $restart Use restart migration
         * @param int $timeout Timeout in seconds for shutdown for restart migration
         * @return Result
         */
        public function createRest($target, $bwlimit = null, $online = null, $restart = null, $timeout = null) {
            $params = ['target' => $target,
                'bwlimit' => $bwlimit,
                'online' => $online,
                'restart' => $restart,
                'timeout' => $timeout];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/migrate", $params);
        }

        /**
         * Migrate the container to another node. Creates a new migration task.
         * @param string $target Target node.
         * @param float $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param bool $online Use online/live migration.
         * @param bool $restart Use restart migration
         * @param int $timeout Timeout in seconds for shutdown for restart migration
         * @return Result
         */
        public function migrateVm($target, $bwlimit = null, $online = null, $restart = null, $timeout = null) {
            return $this->createRest($target, $bwlimit, $online, $restart, $timeout);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesFeature
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesFeature {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Check if feature for virtual machine is available.
         * @param string $feature Feature to check.
         *   Enum: snapshot,clone,copy
         * @param string $snapname The name of the snapshot.
         * @return Result
         */
        public function getRest($feature, $snapname = null) {
            $params = ['feature' => $feature,
                'snapname' => $snapname];
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/feature", $params);
        }

        /**
         * Check if feature for virtual machine is available.
         * @param string $feature Feature to check.
         *   Enum: snapshot,clone,copy
         * @param string $snapname The name of the snapshot.
         * @return Result
         */
        public function vmFeature($feature, $snapname = null) {
            return $this->getRest($feature, $snapname);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesTemplate
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesTemplate {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Create a Template.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/template");
        }

        /**
         * Create a Template.
         * @return Result
         */
        public function template() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesClone
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesClone {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Create a container clone/copy
         * @param int $newid VMID for the clone.
         * @param float $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param string $description Description for the new CT.
         * @param bool $full Create a full copy of all disks. This is always done when you clone a normal CT. For CT templates, we try to create a linked clone by default.
         * @param string $hostname Set a hostname for the new CT.
         * @param string $pool Add the new CT to the specified pool.
         * @param string $snapname The name of the snapshot.
         * @param string $storage Target storage for full clone.
         * @param string $target Target node. Only allowed if the original VM is on shared storage.
         * @return Result
         */
        public function createRest($newid, $bwlimit = null, $description = null, $full = null, $hostname = null, $pool = null, $snapname = null, $storage = null, $target = null) {
            $params = ['newid' => $newid,
                'bwlimit' => $bwlimit,
                'description' => $description,
                'full' => $full,
                'hostname' => $hostname,
                'pool' => $pool,
                'snapname' => $snapname,
                'storage' => $storage,
                'target' => $target];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/clone", $params);
        }

        /**
         * Create a container clone/copy
         * @param int $newid VMID for the clone.
         * @param float $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param string $description Description for the new CT.
         * @param bool $full Create a full copy of all disks. This is always done when you clone a normal CT. For CT templates, we try to create a linked clone by default.
         * @param string $hostname Set a hostname for the new CT.
         * @param string $pool Add the new CT to the specified pool.
         * @param string $snapname The name of the snapshot.
         * @param string $storage Target storage for full clone.
         * @param string $target Target node. Only allowed if the original VM is on shared storage.
         * @return Result
         */
        public function cloneVm($newid, $bwlimit = null, $description = null, $full = null, $hostname = null, $pool = null, $snapname = null, $storage = null, $target = null) {
            return $this->createRest($newid, $bwlimit, $description, $full, $hostname, $pool, $snapname, $storage, $target);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesResize
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesResize {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Resize a container mount point.
         * @param string $disk The disk you want to resize.
         *   Enum: rootfs,mp0,mp1,mp2,mp3,mp4,mp5,mp6,mp7,mp8,mp9,mp10,mp11,mp12,mp13,mp14,mp15,mp16,mp17,mp18,mp19,mp20,mp21,mp22,mp23,mp24,mp25,mp26,mp27,mp28,mp29,mp30,mp31,mp32,mp33,mp34,mp35,mp36,mp37,mp38,mp39,mp40,mp41,mp42,mp43,mp44,mp45,mp46,mp47,mp48,mp49,mp50,mp51,mp52,mp53,mp54,mp55,mp56,mp57,mp58,mp59,mp60,mp61,mp62,mp63,mp64,mp65,mp66,mp67,mp68,mp69,mp70,mp71,mp72,mp73,mp74,mp75,mp76,mp77,mp78,mp79,mp80,mp81,mp82,mp83,mp84,mp85,mp86,mp87,mp88,mp89,mp90,mp91,mp92,mp93,mp94,mp95,mp96,mp97,mp98,mp99,mp100,mp101,mp102,mp103,mp104,mp105,mp106,mp107,mp108,mp109,mp110,mp111,mp112,mp113,mp114,mp115,mp116,mp117,mp118,mp119,mp120,mp121,mp122,mp123,mp124,mp125,mp126,mp127,mp128,mp129,mp130,mp131,mp132,mp133,mp134,mp135,mp136,mp137,mp138,mp139,mp140,mp141,mp142,mp143,mp144,mp145,mp146,mp147,mp148,mp149,mp150,mp151,mp152,mp153,mp154,mp155,mp156,mp157,mp158,mp159,mp160,mp161,mp162,mp163,mp164,mp165,mp166,mp167,mp168,mp169,mp170,mp171,mp172,mp173,mp174,mp175,mp176,mp177,mp178,mp179,mp180,mp181,mp182,mp183,mp184,mp185,mp186,mp187,mp188,mp189,mp190,mp191,mp192,mp193,mp194,mp195,mp196,mp197,mp198,mp199,mp200,mp201,mp202,mp203,mp204,mp205,mp206,mp207,mp208,mp209,mp210,mp211,mp212,mp213,mp214,mp215,mp216,mp217,mp218,mp219,mp220,mp221,mp222,mp223,mp224,mp225,mp226,mp227,mp228,mp229,mp230,mp231,mp232,mp233,mp234,mp235,mp236,mp237,mp238,mp239,mp240,mp241,mp242,mp243,mp244,mp245,mp246,mp247,mp248,mp249,mp250,mp251,mp252,mp253,mp254,mp255
         * @param string $size The new size. With the '+' sign the value is added to the actual size of the volume and without it, the value is taken as an absolute one. Shrinking disk size is not supported.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function setRest($disk, $size, $digest = null) {
            $params = ['disk' => $disk,
                'size' => $size,
                'digest' => $digest];
            return $this->client->set("/nodes/{$this->node}/lxc/{$this->vmid}/resize", $params);
        }

        /**
         * Resize a container mount point.
         * @param string $disk The disk you want to resize.
         *   Enum: rootfs,mp0,mp1,mp2,mp3,mp4,mp5,mp6,mp7,mp8,mp9,mp10,mp11,mp12,mp13,mp14,mp15,mp16,mp17,mp18,mp19,mp20,mp21,mp22,mp23,mp24,mp25,mp26,mp27,mp28,mp29,mp30,mp31,mp32,mp33,mp34,mp35,mp36,mp37,mp38,mp39,mp40,mp41,mp42,mp43,mp44,mp45,mp46,mp47,mp48,mp49,mp50,mp51,mp52,mp53,mp54,mp55,mp56,mp57,mp58,mp59,mp60,mp61,mp62,mp63,mp64,mp65,mp66,mp67,mp68,mp69,mp70,mp71,mp72,mp73,mp74,mp75,mp76,mp77,mp78,mp79,mp80,mp81,mp82,mp83,mp84,mp85,mp86,mp87,mp88,mp89,mp90,mp91,mp92,mp93,mp94,mp95,mp96,mp97,mp98,mp99,mp100,mp101,mp102,mp103,mp104,mp105,mp106,mp107,mp108,mp109,mp110,mp111,mp112,mp113,mp114,mp115,mp116,mp117,mp118,mp119,mp120,mp121,mp122,mp123,mp124,mp125,mp126,mp127,mp128,mp129,mp130,mp131,mp132,mp133,mp134,mp135,mp136,mp137,mp138,mp139,mp140,mp141,mp142,mp143,mp144,mp145,mp146,mp147,mp148,mp149,mp150,mp151,mp152,mp153,mp154,mp155,mp156,mp157,mp158,mp159,mp160,mp161,mp162,mp163,mp164,mp165,mp166,mp167,mp168,mp169,mp170,mp171,mp172,mp173,mp174,mp175,mp176,mp177,mp178,mp179,mp180,mp181,mp182,mp183,mp184,mp185,mp186,mp187,mp188,mp189,mp190,mp191,mp192,mp193,mp194,mp195,mp196,mp197,mp198,mp199,mp200,mp201,mp202,mp203,mp204,mp205,mp206,mp207,mp208,mp209,mp210,mp211,mp212,mp213,mp214,mp215,mp216,mp217,mp218,mp219,mp220,mp221,mp222,mp223,mp224,mp225,mp226,mp227,mp228,mp229,mp230,mp231,mp232,mp233,mp234,mp235,mp236,mp237,mp238,mp239,mp240,mp241,mp242,mp243,mp244,mp245,mp246,mp247,mp248,mp249,mp250,mp251,mp252,mp253,mp254,mp255
         * @param string $size The new size. With the '+' sign the value is added to the actual size of the volume and without it, the value is taken as an absolute one. Shrinking disk size is not supported.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function resizeVm($disk, $size, $digest = null) {
            return $this->setRest($disk, $size, $digest);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesMoveVolume
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesMoveVolume {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Move a rootfs-/mp-volume to a different storage
         * @param string $storage Target Storage.
         * @param string $volume Volume which will be moved.
         *   Enum: rootfs,mp0,mp1,mp2,mp3,mp4,mp5,mp6,mp7,mp8,mp9,mp10,mp11,mp12,mp13,mp14,mp15,mp16,mp17,mp18,mp19,mp20,mp21,mp22,mp23,mp24,mp25,mp26,mp27,mp28,mp29,mp30,mp31,mp32,mp33,mp34,mp35,mp36,mp37,mp38,mp39,mp40,mp41,mp42,mp43,mp44,mp45,mp46,mp47,mp48,mp49,mp50,mp51,mp52,mp53,mp54,mp55,mp56,mp57,mp58,mp59,mp60,mp61,mp62,mp63,mp64,mp65,mp66,mp67,mp68,mp69,mp70,mp71,mp72,mp73,mp74,mp75,mp76,mp77,mp78,mp79,mp80,mp81,mp82,mp83,mp84,mp85,mp86,mp87,mp88,mp89,mp90,mp91,mp92,mp93,mp94,mp95,mp96,mp97,mp98,mp99,mp100,mp101,mp102,mp103,mp104,mp105,mp106,mp107,mp108,mp109,mp110,mp111,mp112,mp113,mp114,mp115,mp116,mp117,mp118,mp119,mp120,mp121,mp122,mp123,mp124,mp125,mp126,mp127,mp128,mp129,mp130,mp131,mp132,mp133,mp134,mp135,mp136,mp137,mp138,mp139,mp140,mp141,mp142,mp143,mp144,mp145,mp146,mp147,mp148,mp149,mp150,mp151,mp152,mp153,mp154,mp155,mp156,mp157,mp158,mp159,mp160,mp161,mp162,mp163,mp164,mp165,mp166,mp167,mp168,mp169,mp170,mp171,mp172,mp173,mp174,mp175,mp176,mp177,mp178,mp179,mp180,mp181,mp182,mp183,mp184,mp185,mp186,mp187,mp188,mp189,mp190,mp191,mp192,mp193,mp194,mp195,mp196,mp197,mp198,mp199,mp200,mp201,mp202,mp203,mp204,mp205,mp206,mp207,mp208,mp209,mp210,mp211,mp212,mp213,mp214,mp215,mp216,mp217,mp218,mp219,mp220,mp221,mp222,mp223,mp224,mp225,mp226,mp227,mp228,mp229,mp230,mp231,mp232,mp233,mp234,mp235,mp236,mp237,mp238,mp239,mp240,mp241,mp242,mp243,mp244,mp245,mp246,mp247,mp248,mp249,mp250,mp251,mp252,mp253,mp254,mp255
         * @param float $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param bool $delete Delete the original volume after successful copy. By default the original is kept as an unused volume entry.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function createRest($storage, $volume, $bwlimit = null, $delete = null, $digest = null) {
            $params = ['storage' => $storage,
                'volume' => $volume,
                'bwlimit' => $bwlimit,
                'delete' => $delete,
                'digest' => $digest];
            return $this->client->create("/nodes/{$this->node}/lxc/{$this->vmid}/move_volume", $params);
        }

        /**
         * Move a rootfs-/mp-volume to a different storage
         * @param string $storage Target Storage.
         * @param string $volume Volume which will be moved.
         *   Enum: rootfs,mp0,mp1,mp2,mp3,mp4,mp5,mp6,mp7,mp8,mp9,mp10,mp11,mp12,mp13,mp14,mp15,mp16,mp17,mp18,mp19,mp20,mp21,mp22,mp23,mp24,mp25,mp26,mp27,mp28,mp29,mp30,mp31,mp32,mp33,mp34,mp35,mp36,mp37,mp38,mp39,mp40,mp41,mp42,mp43,mp44,mp45,mp46,mp47,mp48,mp49,mp50,mp51,mp52,mp53,mp54,mp55,mp56,mp57,mp58,mp59,mp60,mp61,mp62,mp63,mp64,mp65,mp66,mp67,mp68,mp69,mp70,mp71,mp72,mp73,mp74,mp75,mp76,mp77,mp78,mp79,mp80,mp81,mp82,mp83,mp84,mp85,mp86,mp87,mp88,mp89,mp90,mp91,mp92,mp93,mp94,mp95,mp96,mp97,mp98,mp99,mp100,mp101,mp102,mp103,mp104,mp105,mp106,mp107,mp108,mp109,mp110,mp111,mp112,mp113,mp114,mp115,mp116,mp117,mp118,mp119,mp120,mp121,mp122,mp123,mp124,mp125,mp126,mp127,mp128,mp129,mp130,mp131,mp132,mp133,mp134,mp135,mp136,mp137,mp138,mp139,mp140,mp141,mp142,mp143,mp144,mp145,mp146,mp147,mp148,mp149,mp150,mp151,mp152,mp153,mp154,mp155,mp156,mp157,mp158,mp159,mp160,mp161,mp162,mp163,mp164,mp165,mp166,mp167,mp168,mp169,mp170,mp171,mp172,mp173,mp174,mp175,mp176,mp177,mp178,mp179,mp180,mp181,mp182,mp183,mp184,mp185,mp186,mp187,mp188,mp189,mp190,mp191,mp192,mp193,mp194,mp195,mp196,mp197,mp198,mp199,mp200,mp201,mp202,mp203,mp204,mp205,mp206,mp207,mp208,mp209,mp210,mp211,mp212,mp213,mp214,mp215,mp216,mp217,mp218,mp219,mp220,mp221,mp222,mp223,mp224,mp225,mp226,mp227,mp228,mp229,mp230,mp231,mp232,mp233,mp234,mp235,mp236,mp237,mp238,mp239,mp240,mp241,mp242,mp243,mp244,mp245,mp246,mp247,mp248,mp249,mp250,mp251,mp252,mp253,mp254,mp255
         * @param float $bwlimit Override I/O bandwidth limit (in KiB/s).
         * @param bool $delete Delete the original volume after successful copy. By default the original is kept as an unused volume entry.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function moveVolume($storage, $volume, $bwlimit = null, $delete = null, $digest = null) {
            return $this->createRest($storage, $volume, $bwlimit, $delete, $digest);
        }

    }

    /**
     * Class PVEVmidLxcNodeNodesPending
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVmidLxcNodeNodesPending {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $vmid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $vmid) {
            $this->client = $client;
            $this->node = $node;
            $this->vmid = $vmid;
        }

        /**
         * Get container configuration, including pending changes.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/lxc/{$this->vmid}/pending");
        }

        /**
         * Get container configuration, including pending changes.
         * @return Result
         */
        public function vmPending() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesCeph
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesCeph {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $osd;

        /**
         * Get CephNodeNodesOsd
         * @return PVECephNodeNodesOsd
         */
        public function getOsd() {
            return $this->osd ?: ($this->osd = new PVECephNodeNodesOsd($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $mds;

        /**
         * Get CephNodeNodesMds
         * @return PVECephNodeNodesMds
         */
        public function getMds() {
            return $this->mds ?: ($this->mds = new PVECephNodeNodesMds($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $mgr;

        /**
         * Get CephNodeNodesMgr
         * @return PVECephNodeNodesMgr
         */
        public function getMgr() {
            return $this->mgr ?: ($this->mgr = new PVECephNodeNodesMgr($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $mon;

        /**
         * Get CephNodeNodesMon
         * @return PVECephNodeNodesMon
         */
        public function getMon() {
            return $this->mon ?: ($this->mon = new PVECephNodeNodesMon($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $fs;

        /**
         * Get CephNodeNodesFs
         * @return PVECephNodeNodesFs
         */
        public function getFs() {
            return $this->fs ?: ($this->fs = new PVECephNodeNodesFs($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $pools;

        /**
         * Get CephNodeNodesPools
         * @return PVECephNodeNodesPools
         */
        public function getPools() {
            return $this->pools ?: ($this->pools = new PVECephNodeNodesPools($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $config;

        /**
         * Get CephNodeNodesConfig
         * @return PVECephNodeNodesConfig
         */
        public function getConfig() {
            return $this->config ?: ($this->config = new PVECephNodeNodesConfig($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $configdb;

        /**
         * Get CephNodeNodesConfigdb
         * @return PVECephNodeNodesConfigdb
         */
        public function getConfigdb() {
            return $this->configdb ?: ($this->configdb = new PVECephNodeNodesConfigdb($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $init;

        /**
         * Get CephNodeNodesInit
         * @return PVECephNodeNodesInit
         */
        public function getInit() {
            return $this->init ?: ($this->init = new PVECephNodeNodesInit($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $stop;

        /**
         * Get CephNodeNodesStop
         * @return PVECephNodeNodesStop
         */
        public function getStop() {
            return $this->stop ?: ($this->stop = new PVECephNodeNodesStop($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $start;

        /**
         * Get CephNodeNodesStart
         * @return PVECephNodeNodesStart
         */
        public function getStart() {
            return $this->start ?: ($this->start = new PVECephNodeNodesStart($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $restart;

        /**
         * Get CephNodeNodesRestart
         * @return PVECephNodeNodesRestart
         */
        public function getRestart() {
            return $this->restart ?: ($this->restart = new PVECephNodeNodesRestart($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get CephNodeNodesStatus
         * @return PVECephNodeNodesStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVECephNodeNodesStatus($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $crush;

        /**
         * Get CephNodeNodesCrush
         * @return PVECephNodeNodesCrush
         */
        public function getCrush() {
            return $this->crush ?: ($this->crush = new PVECephNodeNodesCrush($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $log;

        /**
         * Get CephNodeNodesLog
         * @return PVECephNodeNodesLog
         */
        public function getLog() {
            return $this->log ?: ($this->log = new PVECephNodeNodesLog($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $rules;

        /**
         * Get CephNodeNodesRules
         * @return PVECephNodeNodesRules
         */
        public function getRules() {
            return $this->rules ?: ($this->rules = new PVECephNodeNodesRules($this->client, $this->node));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECephNodeNodesOsd
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesOsd {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemOsdCephNodeNodesOsdid
         * @param osdid
         * @return PVEItemOsdCephNodeNodesOsdid
         */
        public function get($osdid) {
            return new PVEItemOsdCephNodeNodesOsdid($this->client, $this->node, $osdid);
        }

        /**
         * Get Ceph osd list/tree.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/osd");
        }

        /**
         * Get Ceph osd list/tree.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create OSD
         * @param string $dev Block device name.
         * @param string $crush_device_class Set the device class of the OSD in crush.
         * @param string $db_dev Block device name for block.db.
         * @param float $db_dev_size Size in GiB for block.db.
         * @param bool $encrypted Enables encryption of the OSD.
         * @param string $wal_dev Block device name for block.wal.
         * @param float $wal_dev_size Size in GiB for block.wal.
         * @return Result
         */
        public function createRest($dev, $crush_device_class = null, $db_dev = null, $db_dev_size = null, $encrypted = null, $wal_dev = null, $wal_dev_size = null) {
            $params = ['dev' => $dev,
                'crush-device-class' => $crush_device_class,
                'db_dev' => $db_dev,
                'db_dev_size' => $db_dev_size,
                'encrypted' => $encrypted,
                'wal_dev' => $wal_dev,
                'wal_dev_size' => $wal_dev_size];
            return $this->client->create("/nodes/{$this->node}/ceph/osd", $params);
        }

        /**
         * Create OSD
         * @param string $dev Block device name.
         * @param string $crush_device_class Set the device class of the OSD in crush.
         * @param string $db_dev Block device name for block.db.
         * @param float $db_dev_size Size in GiB for block.db.
         * @param bool $encrypted Enables encryption of the OSD.
         * @param string $wal_dev Block device name for block.wal.
         * @param float $wal_dev_size Size in GiB for block.wal.
         * @return Result
         */
        public function createosd($dev, $crush_device_class = null, $db_dev = null, $db_dev_size = null, $encrypted = null, $wal_dev = null, $wal_dev_size = null) {
            return $this->createRest($dev, $crush_device_class, $db_dev, $db_dev_size, $encrypted, $wal_dev, $wal_dev_size);
        }

    }

    /**
     * Class PVEItemOsdCephNodeNodesOsdid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemOsdCephNodeNodesOsdid {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $osdid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $osdid) {
            $this->client = $client;
            $this->node = $node;
            $this->osdid = $osdid;
        }

        /**
         * @ignore
         */
        private $in;

        /**
         * Get OsdidOsdCephNodeNodesIn
         * @return PVEOsdidOsdCephNodeNodesIn
         */
        public function getIn() {
            return $this->in ?: ($this->in = new PVEOsdidOsdCephNodeNodesIn($this->client, $this->node, $this->osdid));
        }

        /**
         * @ignore
         */
        private $out;

        /**
         * Get OsdidOsdCephNodeNodesOut
         * @return PVEOsdidOsdCephNodeNodesOut
         */
        public function getOut() {
            return $this->out ?: ($this->out = new PVEOsdidOsdCephNodeNodesOut($this->client, $this->node, $this->osdid));
        }

        /**
         * @ignore
         */
        private $scrub;

        /**
         * Get OsdidOsdCephNodeNodesScrub
         * @return PVEOsdidOsdCephNodeNodesScrub
         */
        public function getScrub() {
            return $this->scrub ?: ($this->scrub = new PVEOsdidOsdCephNodeNodesScrub($this->client, $this->node, $this->osdid));
        }

        /**
         * Destroy OSD
         * @param bool $cleanup If set, we remove partition table entries.
         * @return Result
         */
        public function deleteRest($cleanup = null) {
            $params = ['cleanup' => $cleanup];
            return $this->client->delete("/nodes/{$this->node}/ceph/osd/{$this->osdid}", $params);
        }

        /**
         * Destroy OSD
         * @param bool $cleanup If set, we remove partition table entries.
         * @return Result
         */
        public function destroyosd($cleanup = null) {
            return $this->deleteRest($cleanup);
        }

    }

    /**
     * Class PVEOsdidOsdCephNodeNodesIn
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEOsdidOsdCephNodeNodesIn {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $osdid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $osdid) {
            $this->client = $client;
            $this->node = $node;
            $this->osdid = $osdid;
        }

        /**
         * ceph osd in
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/ceph/osd/{$this->osdid}/in");
        }

        /**
         * ceph osd in
         * @return Result
         */
        public function in() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEOsdidOsdCephNodeNodesOut
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEOsdidOsdCephNodeNodesOut {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $osdid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $osdid) {
            $this->client = $client;
            $this->node = $node;
            $this->osdid = $osdid;
        }

        /**
         * ceph osd out
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/ceph/osd/{$this->osdid}/out");
        }

        /**
         * ceph osd out
         * @return Result
         */
        public function out() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEOsdidOsdCephNodeNodesScrub
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEOsdidOsdCephNodeNodesScrub {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $osdid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $osdid) {
            $this->client = $client;
            $this->node = $node;
            $this->osdid = $osdid;
        }

        /**
         * Instruct the OSD to scrub.
         * @param bool $deep If set, instructs a deep scrub instead of a normal one.
         * @return Result
         */
        public function createRest($deep = null) {
            $params = ['deep' => $deep];
            return $this->client->create("/nodes/{$this->node}/ceph/osd/{$this->osdid}/scrub", $params);
        }

        /**
         * Instruct the OSD to scrub.
         * @param bool $deep If set, instructs a deep scrub instead of a normal one.
         * @return Result
         */
        public function scrub($deep = null) {
            return $this->createRest($deep);
        }

    }

    /**
     * Class PVECephNodeNodesMds
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesMds {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemMdsCephNodeNodesName
         * @param name
         * @return PVEItemMdsCephNodeNodesName
         */
        public function get($name) {
            return new PVEItemMdsCephNodeNodesName($this->client, $this->node, $name);
        }

        /**
         * MDS directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/mds");
        }

        /**
         * MDS directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemMdsCephNodeNodesName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemMdsCephNodeNodesName {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $name) {
            $this->client = $client;
            $this->node = $node;
            $this->name = $name;
        }

        /**
         * Destroy Ceph Metadata Server
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/ceph/mds/{$this->name}");
        }

        /**
         * Destroy Ceph Metadata Server
         * @return Result
         */
        public function destroymds() {
            return $this->deleteRest();
        }

        /**
         * Create Ceph Metadata Server (MDS)
         * @param bool $hotstandby Determines whether a ceph-mds daemon should poll and replay the log of an active MDS. Faster switch on MDS failure, but needs more idle resources.
         * @return Result
         */
        public function createRest($hotstandby = null) {
            $params = ['hotstandby' => $hotstandby];
            return $this->client->create("/nodes/{$this->node}/ceph/mds/{$this->name}", $params);
        }

        /**
         * Create Ceph Metadata Server (MDS)
         * @param bool $hotstandby Determines whether a ceph-mds daemon should poll and replay the log of an active MDS. Faster switch on MDS failure, but needs more idle resources.
         * @return Result
         */
        public function createmds($hotstandby = null) {
            return $this->createRest($hotstandby);
        }

    }

    /**
     * Class PVECephNodeNodesMgr
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesMgr {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemMgrCephNodeNodesId
         * @param id
         * @return PVEItemMgrCephNodeNodesId
         */
        public function get($id) {
            return new PVEItemMgrCephNodeNodesId($this->client, $this->node, $id);
        }

        /**
         * MGR directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/mgr");
        }

        /**
         * MGR directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemMgrCephNodeNodesId
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemMgrCephNodeNodesId {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $id) {
            $this->client = $client;
            $this->node = $node;
            $this->id = $id;
        }

        /**
         * Destroy Ceph Manager.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/ceph/mgr/{$this->id}");
        }

        /**
         * Destroy Ceph Manager.
         * @return Result
         */
        public function destroymgr() {
            return $this->deleteRest();
        }

        /**
         * Create Ceph Manager
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/ceph/mgr/{$this->id}");
        }

        /**
         * Create Ceph Manager
         * @return Result
         */
        public function createmgr() {
            return $this->createRest();
        }

    }

    /**
     * Class PVECephNodeNodesMon
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesMon {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemMonCephNodeNodesMonid
         * @param monid
         * @return PVEItemMonCephNodeNodesMonid
         */
        public function get($monid) {
            return new PVEItemMonCephNodeNodesMonid($this->client, $this->node, $monid);
        }

        /**
         * Get Ceph monitor list.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/mon");
        }

        /**
         * Get Ceph monitor list.
         * @return Result
         */
        public function listmon() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemMonCephNodeNodesMonid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemMonCephNodeNodesMonid {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $monid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $monid) {
            $this->client = $client;
            $this->node = $node;
            $this->monid = $monid;
        }

        /**
         * Destroy Ceph Monitor and Manager.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/ceph/mon/{$this->monid}");
        }

        /**
         * Destroy Ceph Monitor and Manager.
         * @return Result
         */
        public function destroymon() {
            return $this->deleteRest();
        }

        /**
         * Create Ceph Monitor and Manager
         * @param string $mon_address Overwrites autodetected monitor IP address(es). Must be in the public network(s) of Ceph.
         * @return Result
         */
        public function createRest($mon_address = null) {
            $params = ['mon-address' => $mon_address];
            return $this->client->create("/nodes/{$this->node}/ceph/mon/{$this->monid}", $params);
        }

        /**
         * Create Ceph Monitor and Manager
         * @param string $mon_address Overwrites autodetected monitor IP address(es). Must be in the public network(s) of Ceph.
         * @return Result
         */
        public function createmon($mon_address = null) {
            return $this->createRest($mon_address);
        }

    }

    /**
     * Class PVECephNodeNodesFs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesFs {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemFsCephNodeNodesName
         * @param name
         * @return PVEItemFsCephNodeNodesName
         */
        public function get($name) {
            return new PVEItemFsCephNodeNodesName($this->client, $this->node, $name);
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/fs");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemFsCephNodeNodesName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemFsCephNodeNodesName {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $name) {
            $this->client = $client;
            $this->node = $node;
            $this->name = $name;
        }

        /**
         * Create a Ceph filesystem
         * @param bool $add_storage Configure the created CephFS as storage for this cluster.
         * @param int $pg_num Number of placement groups for the backing data pool. The metadata pool will use a quarter of this.
         * @return Result
         */
        public function createRest($add_storage = null, $pg_num = null) {
            $params = ['add-storage' => $add_storage,
                'pg_num' => $pg_num];
            return $this->client->create("/nodes/{$this->node}/ceph/fs/{$this->name}", $params);
        }

        /**
         * Create a Ceph filesystem
         * @param bool $add_storage Configure the created CephFS as storage for this cluster.
         * @param int $pg_num Number of placement groups for the backing data pool. The metadata pool will use a quarter of this.
         * @return Result
         */
        public function createfs($add_storage = null, $pg_num = null) {
            return $this->createRest($add_storage, $pg_num);
        }

    }

    /**
     * Class PVECephNodeNodesPools
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesPools {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemPoolsCephNodeNodesName
         * @param name
         * @return PVEItemPoolsCephNodeNodesName
         */
        public function get($name) {
            return new PVEItemPoolsCephNodeNodesName($this->client, $this->node, $name);
        }

        /**
         * List all pools.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/pools");
        }

        /**
         * List all pools.
         * @return Result
         */
        public function lspools() {
            return $this->getRest();
        }

        /**
         * Create POOL
         * @param string $name The name of the pool. It must be unique.
         * @param bool $add_storages Configure VM and CT storage using the new pool.
         * @param string $application The application of the pool.
         *   Enum: rbd,cephfs,rgw
         * @param string $crush_rule The rule to use for mapping object placement in the cluster.
         * @param int $min_size Minimum number of replicas per object
         * @param string $pg_autoscale_mode The automatic PG scaling mode of the pool.
         *   Enum: on,off,warn
         * @param int $pg_num Number of placement groups.
         * @param int $pg_num_min Minimal number of placement groups.
         * @param int $size Number of replicas per object
         * @param string $target_size The estimated target size of the pool for the PG autoscaler.
         * @param float $target_size_ratio The estimated target ratio of the pool for the PG autoscaler.
         * @return Result
         */
        public function createRest($name, $add_storages = null, $application = null, $crush_rule = null, $min_size = null, $pg_autoscale_mode = null, $pg_num = null, $pg_num_min = null, $size = null, $target_size = null, $target_size_ratio = null) {
            $params = ['name' => $name,
                'add_storages' => $add_storages,
                'application' => $application,
                'crush_rule' => $crush_rule,
                'min_size' => $min_size,
                'pg_autoscale_mode' => $pg_autoscale_mode,
                'pg_num' => $pg_num,
                'pg_num_min' => $pg_num_min,
                'size' => $size,
                'target_size' => $target_size,
                'target_size_ratio' => $target_size_ratio];
            return $this->client->create("/nodes/{$this->node}/ceph/pools", $params);
        }

        /**
         * Create POOL
         * @param string $name The name of the pool. It must be unique.
         * @param bool $add_storages Configure VM and CT storage using the new pool.
         * @param string $application The application of the pool.
         *   Enum: rbd,cephfs,rgw
         * @param string $crush_rule The rule to use for mapping object placement in the cluster.
         * @param int $min_size Minimum number of replicas per object
         * @param string $pg_autoscale_mode The automatic PG scaling mode of the pool.
         *   Enum: on,off,warn
         * @param int $pg_num Number of placement groups.
         * @param int $pg_num_min Minimal number of placement groups.
         * @param int $size Number of replicas per object
         * @param string $target_size The estimated target size of the pool for the PG autoscaler.
         * @param float $target_size_ratio The estimated target ratio of the pool for the PG autoscaler.
         * @return Result
         */
        public function createpool($name, $add_storages = null, $application = null, $crush_rule = null, $min_size = null, $pg_autoscale_mode = null, $pg_num = null, $pg_num_min = null, $size = null, $target_size = null, $target_size_ratio = null) {
            return $this->createRest($name, $add_storages, $application, $crush_rule, $min_size, $pg_autoscale_mode, $pg_num, $pg_num_min, $size, $target_size, $target_size_ratio);
        }

    }

    /**
     * Class PVEItemPoolsCephNodeNodesName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemPoolsCephNodeNodesName {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $name) {
            $this->client = $client;
            $this->node = $node;
            $this->name = $name;
        }

        /**
         * Destroy pool
         * @param bool $force If true, destroys pool even if in use
         * @param bool $remove_storages Remove all pveceph-managed storages configured for this pool
         * @return Result
         */
        public function deleteRest($force = null, $remove_storages = null) {
            $params = ['force' => $force,
                'remove_storages' => $remove_storages];
            return $this->client->delete("/nodes/{$this->node}/ceph/pools/{$this->name}", $params);
        }

        /**
         * Destroy pool
         * @param bool $force If true, destroys pool even if in use
         * @param bool $remove_storages Remove all pveceph-managed storages configured for this pool
         * @return Result
         */
        public function destroypool($force = null, $remove_storages = null) {
            return $this->deleteRest($force, $remove_storages);
        }

        /**
         * List pool settings.
         * @param bool $verbose If enabled, will display additional data(eg. statistics).
         * @return Result
         */
        public function getRest($verbose = null) {
            $params = ['verbose' => $verbose];
            return $this->client->get("/nodes/{$this->node}/ceph/pools/{$this->name}", $params);
        }

        /**
         * List pool settings.
         * @param bool $verbose If enabled, will display additional data(eg. statistics).
         * @return Result
         */
        public function getpool($verbose = null) {
            return $this->getRest($verbose);
        }

        /**
         * Change POOL settings
         * @param string $application The application of the pool.
         *   Enum: rbd,cephfs,rgw
         * @param string $crush_rule The rule to use for mapping object placement in the cluster.
         * @param int $min_size Minimum number of replicas per object
         * @param string $pg_autoscale_mode The automatic PG scaling mode of the pool.
         *   Enum: on,off,warn
         * @param int $pg_num Number of placement groups.
         * @param int $pg_num_min Minimal number of placement groups.
         * @param int $size Number of replicas per object
         * @param string $target_size The estimated target size of the pool for the PG autoscaler.
         * @param float $target_size_ratio The estimated target ratio of the pool for the PG autoscaler.
         * @return Result
         */
        public function setRest($application = null, $crush_rule = null, $min_size = null, $pg_autoscale_mode = null, $pg_num = null, $pg_num_min = null, $size = null, $target_size = null, $target_size_ratio = null) {
            $params = ['application' => $application,
                'crush_rule' => $crush_rule,
                'min_size' => $min_size,
                'pg_autoscale_mode' => $pg_autoscale_mode,
                'pg_num' => $pg_num,
                'pg_num_min' => $pg_num_min,
                'size' => $size,
                'target_size' => $target_size,
                'target_size_ratio' => $target_size_ratio];
            return $this->client->set("/nodes/{$this->node}/ceph/pools/{$this->name}", $params);
        }

        /**
         * Change POOL settings
         * @param string $application The application of the pool.
         *   Enum: rbd,cephfs,rgw
         * @param string $crush_rule The rule to use for mapping object placement in the cluster.
         * @param int $min_size Minimum number of replicas per object
         * @param string $pg_autoscale_mode The automatic PG scaling mode of the pool.
         *   Enum: on,off,warn
         * @param int $pg_num Number of placement groups.
         * @param int $pg_num_min Minimal number of placement groups.
         * @param int $size Number of replicas per object
         * @param string $target_size The estimated target size of the pool for the PG autoscaler.
         * @param float $target_size_ratio The estimated target ratio of the pool for the PG autoscaler.
         * @return Result
         */
        public function setpool($application = null, $crush_rule = null, $min_size = null, $pg_autoscale_mode = null, $pg_num = null, $pg_num_min = null, $size = null, $target_size = null, $target_size_ratio = null) {
            return $this->setRest($application, $crush_rule, $min_size, $pg_autoscale_mode, $pg_num, $pg_num_min, $size, $target_size, $target_size_ratio);
        }

    }

    /**
     * Class PVECephNodeNodesConfig
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesConfig {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get Ceph configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/config");
        }

        /**
         * Get Ceph configuration.
         * @return Result
         */
        public function config() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECephNodeNodesConfigdb
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesConfigdb {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get Ceph configuration database.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/configdb");
        }

        /**
         * Get Ceph configuration database.
         * @return Result
         */
        public function configdb() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECephNodeNodesInit
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesInit {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Create initial ceph default configuration and setup symlinks.
         * @param string $cluster_network Declare a separate cluster network, OSDs will routeheartbeat, object replication and recovery traffic over it
         * @param bool $disable_cephx Disable cephx authentication.  WARNING: cephx is a security feature protecting against man-in-the-middle attacks. Only consider disabling cephx if your network is private!
         * @param int $min_size Minimum number of available replicas per object to allow I/O
         * @param string $network Use specific network for all ceph related traffic
         * @param int $pg_bits Placement group bits, used to specify the default number of placement groups.  NOTE: 'osd pool default pg num' does not work for default pools.
         * @param int $size Targeted number of replicas per object
         * @return Result
         */
        public function createRest($cluster_network = null, $disable_cephx = null, $min_size = null, $network = null, $pg_bits = null, $size = null) {
            $params = ['cluster-network' => $cluster_network,
                'disable_cephx' => $disable_cephx,
                'min_size' => $min_size,
                'network' => $network,
                'pg_bits' => $pg_bits,
                'size' => $size];
            return $this->client->create("/nodes/{$this->node}/ceph/init", $params);
        }

        /**
         * Create initial ceph default configuration and setup symlinks.
         * @param string $cluster_network Declare a separate cluster network, OSDs will routeheartbeat, object replication and recovery traffic over it
         * @param bool $disable_cephx Disable cephx authentication.  WARNING: cephx is a security feature protecting against man-in-the-middle attacks. Only consider disabling cephx if your network is private!
         * @param int $min_size Minimum number of available replicas per object to allow I/O
         * @param string $network Use specific network for all ceph related traffic
         * @param int $pg_bits Placement group bits, used to specify the default number of placement groups.  NOTE: 'osd pool default pg num' does not work for default pools.
         * @param int $size Targeted number of replicas per object
         * @return Result
         */
        public function init($cluster_network = null, $disable_cephx = null, $min_size = null, $network = null, $pg_bits = null, $size = null) {
            return $this->createRest($cluster_network, $disable_cephx, $min_size, $network, $pg_bits, $size);
        }

    }

    /**
     * Class PVECephNodeNodesStop
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesStop {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Stop ceph services.
         * @param string $service Ceph service name.
         * @return Result
         */
        public function createRest($service = null) {
            $params = ['service' => $service];
            return $this->client->create("/nodes/{$this->node}/ceph/stop", $params);
        }

        /**
         * Stop ceph services.
         * @param string $service Ceph service name.
         * @return Result
         */
        public function stop($service = null) {
            return $this->createRest($service);
        }

    }

    /**
     * Class PVECephNodeNodesStart
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesStart {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Start ceph services.
         * @param string $service Ceph service name.
         * @return Result
         */
        public function createRest($service = null) {
            $params = ['service' => $service];
            return $this->client->create("/nodes/{$this->node}/ceph/start", $params);
        }

        /**
         * Start ceph services.
         * @param string $service Ceph service name.
         * @return Result
         */
        public function start($service = null) {
            return $this->createRest($service);
        }

    }

    /**
     * Class PVECephNodeNodesRestart
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesRestart {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Restart ceph services.
         * @param string $service Ceph service name.
         * @return Result
         */
        public function createRest($service = null) {
            $params = ['service' => $service];
            return $this->client->create("/nodes/{$this->node}/ceph/restart", $params);
        }

        /**
         * Restart ceph services.
         * @param string $service Ceph service name.
         * @return Result
         */
        public function restart($service = null) {
            return $this->createRest($service);
        }

    }

    /**
     * Class PVECephNodeNodesStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesStatus {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ceph status.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/status");
        }

        /**
         * Get ceph status.
         * @return Result
         */
        public function status() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECephNodeNodesCrush
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesCrush {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get OSD crush map
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/crush");
        }

        /**
         * Get OSD crush map
         * @return Result
         */
        public function crush() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECephNodeNodesLog
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesLog {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read ceph log
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function getRest($limit = null, $start = null) {
            $params = ['limit' => $limit,
                'start' => $start];
            return $this->client->get("/nodes/{$this->node}/ceph/log", $params);
        }

        /**
         * Read ceph log
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function log($limit = null, $start = null) {
            return $this->getRest($limit, $start);
        }

    }

    /**
     * Class PVECephNodeNodesRules
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECephNodeNodesRules {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * List ceph rules.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/ceph/rules");
        }

        /**
         * List ceph rules.
         * @return Result
         */
        public function rules() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesVzdump
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesVzdump {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $defaults;

        /**
         * Get VzdumpNodeNodesDefaults
         * @return PVEVzdumpNodeNodesDefaults
         */
        public function getDefaults() {
            return $this->defaults ?: ($this->defaults = new PVEVzdumpNodeNodesDefaults($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $extractconfig;

        /**
         * Get VzdumpNodeNodesExtractconfig
         * @return PVEVzdumpNodeNodesExtractconfig
         */
        public function getExtractconfig() {
            return $this->extractconfig ?: ($this->extractconfig = new PVEVzdumpNodeNodesExtractconfig($this->client, $this->node));
        }

        /**
         * Create backup.
         * @param bool $all Backup all known guest systems on this host.
         * @param int $bwlimit Limit I/O bandwidth (KBytes per second).
         * @param string $compress Compress dump file.
         *   Enum: 0,1,gzip,lzo,zstd
         * @param string $dumpdir Store resulting files to specified directory.
         * @param string $exclude Exclude specified guest systems (assumes --all)
         * @param string $exclude_path Exclude certain files/directories (shell globs). Paths starting with '/' are anchored to the container's root,  other paths match relative to each subdirectory.
         * @param int $ionice Set CFQ ionice priority.
         * @param int $lockwait Maximal time to wait for the global lock (minutes).
         * @param string $mailnotification Specify when to send an email
         *   Enum: always,failure
         * @param string $mailto Comma-separated list of email addresses or users that should receive email notifications.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per guest system.
         * @param string $mode Backup mode.
         *   Enum: snapshot,suspend,stop
         * @param int $pigz Use pigz instead of gzip when N&amp;gt;0. N=1 uses half of cores, N&amp;gt;1 uses N as thread count.
         * @param string $pool Backup all known guest systems included in the specified pool.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param bool $quiet Be quiet.
         * @param bool $remove Prune older backups according to 'prune-backups'.
         * @param string $script Use specified hook script.
         * @param bool $stdexcludes Exclude temporary files and logs.
         * @param bool $stdout Write tar to stdout, not to a file.
         * @param bool $stop Stop running backup jobs on this host.
         * @param int $stopwait Maximal time to wait until a guest system is stopped (minutes).
         * @param string $storage Store resulting file to this storage.
         * @param string $tmpdir Store temporary files to specified directory.
         * @param string $vmid The ID of the guest system you want to backup.
         * @param int $zstd Zstd threads. N=0 uses half of the available cores, N&amp;gt;0 uses N as thread count.
         * @return Result
         */
        public function createRest($all = null, $bwlimit = null, $compress = null, $dumpdir = null, $exclude = null, $exclude_path = null, $ionice = null, $lockwait = null, $mailnotification = null, $mailto = null, $maxfiles = null, $mode = null, $pigz = null, $pool = null, $prune_backups = null, $quiet = null, $remove = null, $script = null, $stdexcludes = null, $stdout = null, $stop = null, $stopwait = null, $storage = null, $tmpdir = null, $vmid = null, $zstd = null) {
            $params = ['all' => $all,
                'bwlimit' => $bwlimit,
                'compress' => $compress,
                'dumpdir' => $dumpdir,
                'exclude' => $exclude,
                'exclude-path' => $exclude_path,
                'ionice' => $ionice,
                'lockwait' => $lockwait,
                'mailnotification' => $mailnotification,
                'mailto' => $mailto,
                'maxfiles' => $maxfiles,
                'mode' => $mode,
                'pigz' => $pigz,
                'pool' => $pool,
                'prune-backups' => $prune_backups,
                'quiet' => $quiet,
                'remove' => $remove,
                'script' => $script,
                'stdexcludes' => $stdexcludes,
                'stdout' => $stdout,
                'stop' => $stop,
                'stopwait' => $stopwait,
                'storage' => $storage,
                'tmpdir' => $tmpdir,
                'vmid' => $vmid,
                'zstd' => $zstd];
            return $this->client->create("/nodes/{$this->node}/vzdump", $params);
        }

        /**
         * Create backup.
         * @param bool $all Backup all known guest systems on this host.
         * @param int $bwlimit Limit I/O bandwidth (KBytes per second).
         * @param string $compress Compress dump file.
         *   Enum: 0,1,gzip,lzo,zstd
         * @param string $dumpdir Store resulting files to specified directory.
         * @param string $exclude Exclude specified guest systems (assumes --all)
         * @param string $exclude_path Exclude certain files/directories (shell globs). Paths starting with '/' are anchored to the container's root,  other paths match relative to each subdirectory.
         * @param int $ionice Set CFQ ionice priority.
         * @param int $lockwait Maximal time to wait for the global lock (minutes).
         * @param string $mailnotification Specify when to send an email
         *   Enum: always,failure
         * @param string $mailto Comma-separated list of email addresses or users that should receive email notifications.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per guest system.
         * @param string $mode Backup mode.
         *   Enum: snapshot,suspend,stop
         * @param int $pigz Use pigz instead of gzip when N&amp;gt;0. N=1 uses half of cores, N&amp;gt;1 uses N as thread count.
         * @param string $pool Backup all known guest systems included in the specified pool.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param bool $quiet Be quiet.
         * @param bool $remove Prune older backups according to 'prune-backups'.
         * @param string $script Use specified hook script.
         * @param bool $stdexcludes Exclude temporary files and logs.
         * @param bool $stdout Write tar to stdout, not to a file.
         * @param bool $stop Stop running backup jobs on this host.
         * @param int $stopwait Maximal time to wait until a guest system is stopped (minutes).
         * @param string $storage Store resulting file to this storage.
         * @param string $tmpdir Store temporary files to specified directory.
         * @param string $vmid The ID of the guest system you want to backup.
         * @param int $zstd Zstd threads. N=0 uses half of the available cores, N&amp;gt;0 uses N as thread count.
         * @return Result
         */
        public function vzdump($all = null, $bwlimit = null, $compress = null, $dumpdir = null, $exclude = null, $exclude_path = null, $ionice = null, $lockwait = null, $mailnotification = null, $mailto = null, $maxfiles = null, $mode = null, $pigz = null, $pool = null, $prune_backups = null, $quiet = null, $remove = null, $script = null, $stdexcludes = null, $stdout = null, $stop = null, $stopwait = null, $storage = null, $tmpdir = null, $vmid = null, $zstd = null) {
            return $this->createRest($all, $bwlimit, $compress, $dumpdir, $exclude, $exclude_path, $ionice, $lockwait, $mailnotification, $mailto, $maxfiles, $mode, $pigz, $pool, $prune_backups, $quiet, $remove, $script, $stdexcludes, $stdout, $stop, $stopwait, $storage, $tmpdir, $vmid, $zstd);
        }

    }

    /**
     * Class PVEVzdumpNodeNodesDefaults
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVzdumpNodeNodesDefaults {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get the currently configured vzdump defaults.
         * @param string $storage The storage identifier.
         * @return Result
         */
        public function getRest($storage = null) {
            $params = ['storage' => $storage];
            return $this->client->get("/nodes/{$this->node}/vzdump/defaults", $params);
        }

        /**
         * Get the currently configured vzdump defaults.
         * @param string $storage The storage identifier.
         * @return Result
         */
        public function defaults($storage = null) {
            return $this->getRest($storage);
        }

    }

    /**
     * Class PVEVzdumpNodeNodesExtractconfig
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVzdumpNodeNodesExtractconfig {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Extract configuration from vzdump backup archive.
         * @param string $volume Volume identifier
         * @return Result
         */
        public function getRest($volume) {
            $params = ['volume' => $volume];
            return $this->client->get("/nodes/{$this->node}/vzdump/extractconfig", $params);
        }

        /**
         * Extract configuration from vzdump backup archive.
         * @param string $volume Volume identifier
         * @return Result
         */
        public function extractconfig($volume) {
            return $this->getRest($volume);
        }

    }

    /**
     * Class PVENodeNodesServices
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesServices {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemServicesNodeNodesService
         * @param service
         * @return PVEItemServicesNodeNodesService
         */
        public function get($service) {
            return new PVEItemServicesNodeNodesService($this->client, $this->node, $service);
        }

        /**
         * Service list.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/services");
        }

        /**
         * Service list.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemServicesNodeNodesService
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemServicesNodeNodesService {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $service;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $service) {
            $this->client = $client;
            $this->node = $node;
            $this->service = $service;
        }

        /**
         * @ignore
         */
        private $state;

        /**
         * Get ServiceServicesNodeNodesState
         * @return PVEServiceServicesNodeNodesState
         */
        public function getState() {
            return $this->state ?: ($this->state = new PVEServiceServicesNodeNodesState($this->client, $this->node, $this->service));
        }

        /**
         * @ignore
         */
        private $start;

        /**
         * Get ServiceServicesNodeNodesStart
         * @return PVEServiceServicesNodeNodesStart
         */
        public function getStart() {
            return $this->start ?: ($this->start = new PVEServiceServicesNodeNodesStart($this->client, $this->node, $this->service));
        }

        /**
         * @ignore
         */
        private $stop;

        /**
         * Get ServiceServicesNodeNodesStop
         * @return PVEServiceServicesNodeNodesStop
         */
        public function getStop() {
            return $this->stop ?: ($this->stop = new PVEServiceServicesNodeNodesStop($this->client, $this->node, $this->service));
        }

        /**
         * @ignore
         */
        private $restart;

        /**
         * Get ServiceServicesNodeNodesRestart
         * @return PVEServiceServicesNodeNodesRestart
         */
        public function getRestart() {
            return $this->restart ?: ($this->restart = new PVEServiceServicesNodeNodesRestart($this->client, $this->node, $this->service));
        }

        /**
         * @ignore
         */
        private $reload;

        /**
         * Get ServiceServicesNodeNodesReload
         * @return PVEServiceServicesNodeNodesReload
         */
        public function getReload() {
            return $this->reload ?: ($this->reload = new PVEServiceServicesNodeNodesReload($this->client, $this->node, $this->service));
        }

        /**
         * Directory index
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/services/{$this->service}");
        }

        /**
         * Directory index
         * @return Result
         */
        public function srvcmdidx() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEServiceServicesNodeNodesState
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEServiceServicesNodeNodesState {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $service;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $service) {
            $this->client = $client;
            $this->node = $node;
            $this->service = $service;
        }

        /**
         * Read service properties
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/services/{$this->service}/state");
        }

        /**
         * Read service properties
         * @return Result
         */
        public function serviceState() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEServiceServicesNodeNodesStart
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEServiceServicesNodeNodesStart {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $service;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $service) {
            $this->client = $client;
            $this->node = $node;
            $this->service = $service;
        }

        /**
         * Start service.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/services/{$this->service}/start");
        }

        /**
         * Start service.
         * @return Result
         */
        public function serviceStart() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEServiceServicesNodeNodesStop
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEServiceServicesNodeNodesStop {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $service;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $service) {
            $this->client = $client;
            $this->node = $node;
            $this->service = $service;
        }

        /**
         * Stop service.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/services/{$this->service}/stop");
        }

        /**
         * Stop service.
         * @return Result
         */
        public function serviceStop() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEServiceServicesNodeNodesRestart
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEServiceServicesNodeNodesRestart {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $service;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $service) {
            $this->client = $client;
            $this->node = $node;
            $this->service = $service;
        }

        /**
         * Hard restart service. Use reload if you want to reduce interruptions.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/services/{$this->service}/restart");
        }

        /**
         * Hard restart service. Use reload if you want to reduce interruptions.
         * @return Result
         */
        public function serviceRestart() {
            return $this->createRest();
        }

    }

    /**
     * Class PVEServiceServicesNodeNodesReload
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEServiceServicesNodeNodesReload {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $service;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $service) {
            $this->client = $client;
            $this->node = $node;
            $this->service = $service;
        }

        /**
         * Reload service. Falls back to restart if service cannot be reloaded.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/services/{$this->service}/reload");
        }

        /**
         * Reload service. Falls back to restart if service cannot be reloaded.
         * @return Result
         */
        public function serviceReload() {
            return $this->createRest();
        }

    }

    /**
     * Class PVENodeNodesSubscription
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesSubscription {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Delete subscription key of this node.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/subscription");
        }

        /**
         * Delete subscription key of this node.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read subscription info.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/subscription");
        }

        /**
         * Read subscription info.
         * @return Result
         */
        public function get() {
            return $this->getRest();
        }

        /**
         * Update subscription info.
         * @param bool $force Always connect to server, even if we have up to date info inside local cache.
         * @return Result
         */
        public function createRest($force = null) {
            $params = ['force' => $force];
            return $this->client->create("/nodes/{$this->node}/subscription", $params);
        }

        /**
         * Update subscription info.
         * @param bool $force Always connect to server, even if we have up to date info inside local cache.
         * @return Result
         */
        public function update($force = null) {
            return $this->createRest($force);
        }

        /**
         * Set subscription key.
         * @param string $key Proxmox VE subscription key
         * @return Result
         */
        public function setRest($key) {
            $params = ['key' => $key];
            return $this->client->set("/nodes/{$this->node}/subscription", $params);
        }

        /**
         * Set subscription key.
         * @param string $key Proxmox VE subscription key
         * @return Result
         */
        public function set($key) {
            return $this->setRest($key);
        }

    }

    /**
     * Class PVENodeNodesNetwork
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesNetwork {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemNetworkNodeNodesIface
         * @param iface
         * @return PVEItemNetworkNodeNodesIface
         */
        public function get($iface) {
            return new PVEItemNetworkNodeNodesIface($this->client, $this->node, $iface);
        }

        /**
         * Revert network configuration changes.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/network");
        }

        /**
         * Revert network configuration changes.
         * @return Result
         */
        public function revertNetworkChanges() {
            return $this->deleteRest();
        }

        /**
         * List available networks
         * @param string $type Only list specific interface types.
         *   Enum: bridge,bond,eth,alias,vlan,OVSBridge,OVSBond,OVSPort,OVSIntPort,any_bridge
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/nodes/{$this->node}/network", $params);
        }

        /**
         * List available networks
         * @param string $type Only list specific interface types.
         *   Enum: bridge,bond,eth,alias,vlan,OVSBridge,OVSBond,OVSPort,OVSIntPort,any_bridge
         * @return Result
         */
        public function index($type = null) {
            return $this->getRest($type);
        }

        /**
         * Create network device configuration
         * @param string $iface Network interface name.
         * @param string $type Network interface type
         *   Enum: bridge,bond,eth,alias,vlan,OVSBridge,OVSBond,OVSPort,OVSIntPort,unknown
         * @param string $address IP address.
         * @param string $address6 IP address.
         * @param bool $autostart Automatically start interface on boot.
         * @param string $bond_primary Specify the primary interface for active-backup bond.
         * @param string $bond_mode Bonding mode.
         *   Enum: balance-rr,active-backup,balance-xor,broadcast,802.3ad,balance-tlb,balance-alb,balance-slb,lacp-balance-slb,lacp-balance-tcp
         * @param string $bond_xmit_hash_policy Selects the transmit hash policy to use for slave selection in balance-xor and 802.3ad modes.
         *   Enum: layer2,layer2+3,layer3+4
         * @param string $bridge_ports Specify the interfaces you want to add to your bridge.
         * @param bool $bridge_vlan_aware Enable bridge vlan support.
         * @param string $cidr IPv4 CIDR.
         * @param string $cidr6 IPv6 CIDR.
         * @param string $comments Comments
         * @param string $comments6 Comments
         * @param string $gateway Default gateway address.
         * @param string $gateway6 Default ipv6 gateway address.
         * @param int $mtu MTU.
         * @param string $netmask Network mask.
         * @param int $netmask6 Network mask.
         * @param string $ovs_bonds Specify the interfaces used by the bonding device.
         * @param string $ovs_bridge The OVS bridge associated with a OVS port. This is required when you create an OVS port.
         * @param string $ovs_options OVS interface options.
         * @param string $ovs_ports Specify the interfaces you want to add to your bridge.
         * @param int $ovs_tag Specify a VLan tag (used by OVSPort, OVSIntPort, OVSBond)
         * @param string $slaves Specify the interfaces used by the bonding device.
         * @param int $vlan_id vlan-id for a custom named vlan interface (ifupdown2 only).
         * @param string $vlan_raw_device Specify the raw interface for the vlan interface.
         * @return Result
         */
        public function createRest($iface, $type, $address = null, $address6 = null, $autostart = null, $bond_primary = null, $bond_mode = null, $bond_xmit_hash_policy = null, $bridge_ports = null, $bridge_vlan_aware = null, $cidr = null, $cidr6 = null, $comments = null, $comments6 = null, $gateway = null, $gateway6 = null, $mtu = null, $netmask = null, $netmask6 = null, $ovs_bonds = null, $ovs_bridge = null, $ovs_options = null, $ovs_ports = null, $ovs_tag = null, $slaves = null, $vlan_id = null, $vlan_raw_device = null) {
            $params = ['iface' => $iface,
                'type' => $type,
                'address' => $address,
                'address6' => $address6,
                'autostart' => $autostart,
                'bond-primary' => $bond_primary,
                'bond_mode' => $bond_mode,
                'bond_xmit_hash_policy' => $bond_xmit_hash_policy,
                'bridge_ports' => $bridge_ports,
                'bridge_vlan_aware' => $bridge_vlan_aware,
                'cidr' => $cidr,
                'cidr6' => $cidr6,
                'comments' => $comments,
                'comments6' => $comments6,
                'gateway' => $gateway,
                'gateway6' => $gateway6,
                'mtu' => $mtu,
                'netmask' => $netmask,
                'netmask6' => $netmask6,
                'ovs_bonds' => $ovs_bonds,
                'ovs_bridge' => $ovs_bridge,
                'ovs_options' => $ovs_options,
                'ovs_ports' => $ovs_ports,
                'ovs_tag' => $ovs_tag,
                'slaves' => $slaves,
                'vlan-id' => $vlan_id,
                'vlan-raw-device' => $vlan_raw_device];
            return $this->client->create("/nodes/{$this->node}/network", $params);
        }

        /**
         * Create network device configuration
         * @param string $iface Network interface name.
         * @param string $type Network interface type
         *   Enum: bridge,bond,eth,alias,vlan,OVSBridge,OVSBond,OVSPort,OVSIntPort,unknown
         * @param string $address IP address.
         * @param string $address6 IP address.
         * @param bool $autostart Automatically start interface on boot.
         * @param string $bond_primary Specify the primary interface for active-backup bond.
         * @param string $bond_mode Bonding mode.
         *   Enum: balance-rr,active-backup,balance-xor,broadcast,802.3ad,balance-tlb,balance-alb,balance-slb,lacp-balance-slb,lacp-balance-tcp
         * @param string $bond_xmit_hash_policy Selects the transmit hash policy to use for slave selection in balance-xor and 802.3ad modes.
         *   Enum: layer2,layer2+3,layer3+4
         * @param string $bridge_ports Specify the interfaces you want to add to your bridge.
         * @param bool $bridge_vlan_aware Enable bridge vlan support.
         * @param string $cidr IPv4 CIDR.
         * @param string $cidr6 IPv6 CIDR.
         * @param string $comments Comments
         * @param string $comments6 Comments
         * @param string $gateway Default gateway address.
         * @param string $gateway6 Default ipv6 gateway address.
         * @param int $mtu MTU.
         * @param string $netmask Network mask.
         * @param int $netmask6 Network mask.
         * @param string $ovs_bonds Specify the interfaces used by the bonding device.
         * @param string $ovs_bridge The OVS bridge associated with a OVS port. This is required when you create an OVS port.
         * @param string $ovs_options OVS interface options.
         * @param string $ovs_ports Specify the interfaces you want to add to your bridge.
         * @param int $ovs_tag Specify a VLan tag (used by OVSPort, OVSIntPort, OVSBond)
         * @param string $slaves Specify the interfaces used by the bonding device.
         * @param int $vlan_id vlan-id for a custom named vlan interface (ifupdown2 only).
         * @param string $vlan_raw_device Specify the raw interface for the vlan interface.
         * @return Result
         */
        public function createNetwork($iface, $type, $address = null, $address6 = null, $autostart = null, $bond_primary = null, $bond_mode = null, $bond_xmit_hash_policy = null, $bridge_ports = null, $bridge_vlan_aware = null, $cidr = null, $cidr6 = null, $comments = null, $comments6 = null, $gateway = null, $gateway6 = null, $mtu = null, $netmask = null, $netmask6 = null, $ovs_bonds = null, $ovs_bridge = null, $ovs_options = null, $ovs_ports = null, $ovs_tag = null, $slaves = null, $vlan_id = null, $vlan_raw_device = null) {
            return $this->createRest($iface, $type, $address, $address6, $autostart, $bond_primary, $bond_mode, $bond_xmit_hash_policy, $bridge_ports, $bridge_vlan_aware, $cidr, $cidr6, $comments, $comments6, $gateway, $gateway6, $mtu, $netmask, $netmask6, $ovs_bonds, $ovs_bridge, $ovs_options, $ovs_ports, $ovs_tag, $slaves, $vlan_id, $vlan_raw_device);
        }

        /**
         * Reload network configuration
         * @return Result
         */
        public function setRest() {
            return $this->client->set("/nodes/{$this->node}/network");
        }

        /**
         * Reload network configuration
         * @return Result
         */
        public function reloadNetworkConfig() {
            return $this->setRest();
        }

    }

    /**
     * Class PVEItemNetworkNodeNodesIface
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemNetworkNodeNodesIface {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $iface;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $iface) {
            $this->client = $client;
            $this->node = $node;
            $this->iface = $iface;
        }

        /**
         * Delete network device configuration
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/network/{$this->iface}");
        }

        /**
         * Delete network device configuration
         * @return Result
         */
        public function deleteNetwork() {
            return $this->deleteRest();
        }

        /**
         * Read network device configuration
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/network/{$this->iface}");
        }

        /**
         * Read network device configuration
         * @return Result
         */
        public function networkConfig() {
            return $this->getRest();
        }

        /**
         * Update network device configuration
         * @param string $type Network interface type
         *   Enum: bridge,bond,eth,alias,vlan,OVSBridge,OVSBond,OVSPort,OVSIntPort,unknown
         * @param string $address IP address.
         * @param string $address6 IP address.
         * @param bool $autostart Automatically start interface on boot.
         * @param string $bond_primary Specify the primary interface for active-backup bond.
         * @param string $bond_mode Bonding mode.
         *   Enum: balance-rr,active-backup,balance-xor,broadcast,802.3ad,balance-tlb,balance-alb,balance-slb,lacp-balance-slb,lacp-balance-tcp
         * @param string $bond_xmit_hash_policy Selects the transmit hash policy to use for slave selection in balance-xor and 802.3ad modes.
         *   Enum: layer2,layer2+3,layer3+4
         * @param string $bridge_ports Specify the interfaces you want to add to your bridge.
         * @param bool $bridge_vlan_aware Enable bridge vlan support.
         * @param string $cidr IPv4 CIDR.
         * @param string $cidr6 IPv6 CIDR.
         * @param string $comments Comments
         * @param string $comments6 Comments
         * @param string $delete A list of settings you want to delete.
         * @param string $gateway Default gateway address.
         * @param string $gateway6 Default ipv6 gateway address.
         * @param int $mtu MTU.
         * @param string $netmask Network mask.
         * @param int $netmask6 Network mask.
         * @param string $ovs_bonds Specify the interfaces used by the bonding device.
         * @param string $ovs_bridge The OVS bridge associated with a OVS port. This is required when you create an OVS port.
         * @param string $ovs_options OVS interface options.
         * @param string $ovs_ports Specify the interfaces you want to add to your bridge.
         * @param int $ovs_tag Specify a VLan tag (used by OVSPort, OVSIntPort, OVSBond)
         * @param string $slaves Specify the interfaces used by the bonding device.
         * @param int $vlan_id vlan-id for a custom named vlan interface (ifupdown2 only).
         * @param string $vlan_raw_device Specify the raw interface for the vlan interface.
         * @return Result
         */
        public function setRest($type, $address = null, $address6 = null, $autostart = null, $bond_primary = null, $bond_mode = null, $bond_xmit_hash_policy = null, $bridge_ports = null, $bridge_vlan_aware = null, $cidr = null, $cidr6 = null, $comments = null, $comments6 = null, $delete = null, $gateway = null, $gateway6 = null, $mtu = null, $netmask = null, $netmask6 = null, $ovs_bonds = null, $ovs_bridge = null, $ovs_options = null, $ovs_ports = null, $ovs_tag = null, $slaves = null, $vlan_id = null, $vlan_raw_device = null) {
            $params = ['type' => $type,
                'address' => $address,
                'address6' => $address6,
                'autostart' => $autostart,
                'bond-primary' => $bond_primary,
                'bond_mode' => $bond_mode,
                'bond_xmit_hash_policy' => $bond_xmit_hash_policy,
                'bridge_ports' => $bridge_ports,
                'bridge_vlan_aware' => $bridge_vlan_aware,
                'cidr' => $cidr,
                'cidr6' => $cidr6,
                'comments' => $comments,
                'comments6' => $comments6,
                'delete' => $delete,
                'gateway' => $gateway,
                'gateway6' => $gateway6,
                'mtu' => $mtu,
                'netmask' => $netmask,
                'netmask6' => $netmask6,
                'ovs_bonds' => $ovs_bonds,
                'ovs_bridge' => $ovs_bridge,
                'ovs_options' => $ovs_options,
                'ovs_ports' => $ovs_ports,
                'ovs_tag' => $ovs_tag,
                'slaves' => $slaves,
                'vlan-id' => $vlan_id,
                'vlan-raw-device' => $vlan_raw_device];
            return $this->client->set("/nodes/{$this->node}/network/{$this->iface}", $params);
        }

        /**
         * Update network device configuration
         * @param string $type Network interface type
         *   Enum: bridge,bond,eth,alias,vlan,OVSBridge,OVSBond,OVSPort,OVSIntPort,unknown
         * @param string $address IP address.
         * @param string $address6 IP address.
         * @param bool $autostart Automatically start interface on boot.
         * @param string $bond_primary Specify the primary interface for active-backup bond.
         * @param string $bond_mode Bonding mode.
         *   Enum: balance-rr,active-backup,balance-xor,broadcast,802.3ad,balance-tlb,balance-alb,balance-slb,lacp-balance-slb,lacp-balance-tcp
         * @param string $bond_xmit_hash_policy Selects the transmit hash policy to use for slave selection in balance-xor and 802.3ad modes.
         *   Enum: layer2,layer2+3,layer3+4
         * @param string $bridge_ports Specify the interfaces you want to add to your bridge.
         * @param bool $bridge_vlan_aware Enable bridge vlan support.
         * @param string $cidr IPv4 CIDR.
         * @param string $cidr6 IPv6 CIDR.
         * @param string $comments Comments
         * @param string $comments6 Comments
         * @param string $delete A list of settings you want to delete.
         * @param string $gateway Default gateway address.
         * @param string $gateway6 Default ipv6 gateway address.
         * @param int $mtu MTU.
         * @param string $netmask Network mask.
         * @param int $netmask6 Network mask.
         * @param string $ovs_bonds Specify the interfaces used by the bonding device.
         * @param string $ovs_bridge The OVS bridge associated with a OVS port. This is required when you create an OVS port.
         * @param string $ovs_options OVS interface options.
         * @param string $ovs_ports Specify the interfaces you want to add to your bridge.
         * @param int $ovs_tag Specify a VLan tag (used by OVSPort, OVSIntPort, OVSBond)
         * @param string $slaves Specify the interfaces used by the bonding device.
         * @param int $vlan_id vlan-id for a custom named vlan interface (ifupdown2 only).
         * @param string $vlan_raw_device Specify the raw interface for the vlan interface.
         * @return Result
         */
        public function updateNetwork($type, $address = null, $address6 = null, $autostart = null, $bond_primary = null, $bond_mode = null, $bond_xmit_hash_policy = null, $bridge_ports = null, $bridge_vlan_aware = null, $cidr = null, $cidr6 = null, $comments = null, $comments6 = null, $delete = null, $gateway = null, $gateway6 = null, $mtu = null, $netmask = null, $netmask6 = null, $ovs_bonds = null, $ovs_bridge = null, $ovs_options = null, $ovs_ports = null, $ovs_tag = null, $slaves = null, $vlan_id = null, $vlan_raw_device = null) {
            return $this->setRest($type, $address, $address6, $autostart, $bond_primary, $bond_mode, $bond_xmit_hash_policy, $bridge_ports, $bridge_vlan_aware, $cidr, $cidr6, $comments, $comments6, $delete, $gateway, $gateway6, $mtu, $netmask, $netmask6, $ovs_bonds, $ovs_bridge, $ovs_options, $ovs_ports, $ovs_tag, $slaves, $vlan_id, $vlan_raw_device);
        }

    }

    /**
     * Class PVENodeNodesTasks
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesTasks {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemTasksNodeNodesUpid
         * @param upid
         * @return PVEItemTasksNodeNodesUpid
         */
        public function get($upid) {
            return new PVEItemTasksNodeNodesUpid($this->client, $this->node, $upid);
        }

        /**
         * Read task list for one node (finished tasks).
         * @param bool $errors 
         * @param int $limit Only list this amount of tasks.
         * @param int $since Only list tasks since this UNIX epoch.
         * @param string $source List archived, active or all tasks.
         *   Enum: archive,active,all
         * @param int $start List tasks beginning from this offset.
         * @param string $statusfilter List of Task States that should be returned.
         * @param string $typefilter Only list tasks of this type (e.g., vzstart, vzdump).
         * @param int $until Only list tasks until this UNIX epoch.
         * @param string $userfilter Only list tasks from this user.
         * @param int $vmid Only list tasks for this VM.
         * @return Result
         */
        public function getRest($errors = null, $limit = null, $since = null, $source = null, $start = null, $statusfilter = null, $typefilter = null, $until = null, $userfilter = null, $vmid = null) {
            $params = ['errors' => $errors,
                'limit' => $limit,
                'since' => $since,
                'source' => $source,
                'start' => $start,
                'statusfilter' => $statusfilter,
                'typefilter' => $typefilter,
                'until' => $until,
                'userfilter' => $userfilter,
                'vmid' => $vmid];
            return $this->client->get("/nodes/{$this->node}/tasks", $params);
        }

        /**
         * Read task list for one node (finished tasks).
         * @param bool $errors 
         * @param int $limit Only list this amount of tasks.
         * @param int $since Only list tasks since this UNIX epoch.
         * @param string $source List archived, active or all tasks.
         *   Enum: archive,active,all
         * @param int $start List tasks beginning from this offset.
         * @param string $statusfilter List of Task States that should be returned.
         * @param string $typefilter Only list tasks of this type (e.g., vzstart, vzdump).
         * @param int $until Only list tasks until this UNIX epoch.
         * @param string $userfilter Only list tasks from this user.
         * @param int $vmid Only list tasks for this VM.
         * @return Result
         */
        public function nodeTasks($errors = null, $limit = null, $since = null, $source = null, $start = null, $statusfilter = null, $typefilter = null, $until = null, $userfilter = null, $vmid = null) {
            return $this->getRest($errors, $limit, $since, $source, $start, $statusfilter, $typefilter, $until, $userfilter, $vmid);
        }

    }

    /**
     * Class PVEItemTasksNodeNodesUpid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemTasksNodeNodesUpid {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $upid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $upid) {
            $this->client = $client;
            $this->node = $node;
            $this->upid = $upid;
        }

        /**
         * @ignore
         */
        private $log;

        /**
         * Get UpidTasksNodeNodesLog
         * @return PVEUpidTasksNodeNodesLog
         */
        public function getLog() {
            return $this->log ?: ($this->log = new PVEUpidTasksNodeNodesLog($this->client, $this->node, $this->upid));
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get UpidTasksNodeNodesStatus
         * @return PVEUpidTasksNodeNodesStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVEUpidTasksNodeNodesStatus($this->client, $this->node, $this->upid));
        }

        /**
         * Stop a task.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/tasks/{$this->upid}");
        }

        /**
         * Stop a task.
         * @return Result
         */
        public function stopTask() {
            return $this->deleteRest();
        }

        /**
         * 
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/tasks/{$this->upid}");
        }

        /**
         * 
         * @return Result
         */
        public function upidIndex() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEUpidTasksNodeNodesLog
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEUpidTasksNodeNodesLog {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $upid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $upid) {
            $this->client = $client;
            $this->node = $node;
            $this->upid = $upid;
        }

        /**
         * Read task log.
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function getRest($limit = null, $start = null) {
            $params = ['limit' => $limit,
                'start' => $start];
            return $this->client->get("/nodes/{$this->node}/tasks/{$this->upid}/log", $params);
        }

        /**
         * Read task log.
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function readTaskLog($limit = null, $start = null) {
            return $this->getRest($limit, $start);
        }

    }

    /**
     * Class PVEUpidTasksNodeNodesStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEUpidTasksNodeNodesStatus {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $upid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $upid) {
            $this->client = $client;
            $this->node = $node;
            $this->upid = $upid;
        }

        /**
         * Read task status.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/tasks/{$this->upid}/status");
        }

        /**
         * Read task status.
         * @return Result
         */
        public function readTaskStatus() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesScan
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesScan {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $nfs;

        /**
         * Get ScanNodeNodesNfs
         * @return PVEScanNodeNodesNfs
         */
        public function getNfs() {
            return $this->nfs ?: ($this->nfs = new PVEScanNodeNodesNfs($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $cifs;

        /**
         * Get ScanNodeNodesCifs
         * @return PVEScanNodeNodesCifs
         */
        public function getCifs() {
            return $this->cifs ?: ($this->cifs = new PVEScanNodeNodesCifs($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $pbs;

        /**
         * Get ScanNodeNodesPbs
         * @return PVEScanNodeNodesPbs
         */
        public function getPbs() {
            return $this->pbs ?: ($this->pbs = new PVEScanNodeNodesPbs($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $glusterfs;

        /**
         * Get ScanNodeNodesGlusterfs
         * @return PVEScanNodeNodesGlusterfs
         */
        public function getGlusterfs() {
            return $this->glusterfs ?: ($this->glusterfs = new PVEScanNodeNodesGlusterfs($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $iscsi;

        /**
         * Get ScanNodeNodesIscsi
         * @return PVEScanNodeNodesIscsi
         */
        public function getIscsi() {
            return $this->iscsi ?: ($this->iscsi = new PVEScanNodeNodesIscsi($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $lvm;

        /**
         * Get ScanNodeNodesLvm
         * @return PVEScanNodeNodesLvm
         */
        public function getLvm() {
            return $this->lvm ?: ($this->lvm = new PVEScanNodeNodesLvm($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $lvmthin;

        /**
         * Get ScanNodeNodesLvmthin
         * @return PVEScanNodeNodesLvmthin
         */
        public function getLvmthin() {
            return $this->lvmthin ?: ($this->lvmthin = new PVEScanNodeNodesLvmthin($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $zfs;

        /**
         * Get ScanNodeNodesZfs
         * @return PVEScanNodeNodesZfs
         */
        public function getZfs() {
            return $this->zfs ?: ($this->zfs = new PVEScanNodeNodesZfs($this->client, $this->node));
        }

        /**
         * Index of available scan methods
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/scan");
        }

        /**
         * Index of available scan methods
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEScanNodeNodesNfs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEScanNodeNodesNfs {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Scan remote NFS server.
         * @param string $server The server address (name or IP).
         * @return Result
         */
        public function getRest($server) {
            $params = ['server' => $server];
            return $this->client->get("/nodes/{$this->node}/scan/nfs", $params);
        }

        /**
         * Scan remote NFS server.
         * @param string $server The server address (name or IP).
         * @return Result
         */
        public function nfsscan($server) {
            return $this->getRest($server);
        }

    }

    /**
     * Class PVEScanNodeNodesCifs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEScanNodeNodesCifs {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Scan remote CIFS server.
         * @param string $server The server address (name or IP).
         * @param string $domain SMB domain (Workgroup).
         * @param string $password User password.
         * @param string $username User name.
         * @return Result
         */
        public function getRest($server, $domain = null, $password = null, $username = null) {
            $params = ['server' => $server,
                'domain' => $domain,
                'password' => $password,
                'username' => $username];
            return $this->client->get("/nodes/{$this->node}/scan/cifs", $params);
        }

        /**
         * Scan remote CIFS server.
         * @param string $server The server address (name or IP).
         * @param string $domain SMB domain (Workgroup).
         * @param string $password User password.
         * @param string $username User name.
         * @return Result
         */
        public function cifsscan($server, $domain = null, $password = null, $username = null) {
            return $this->getRest($server, $domain, $password, $username);
        }

    }

    /**
     * Class PVEScanNodeNodesPbs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEScanNodeNodesPbs {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Scan remote Proxmox Backup Server.
         * @param string $password User password or API token secret.
         * @param string $server The server address (name or IP).
         * @param string $username User-name or API token-ID.
         * @param string $fingerprint Certificate SHA 256 fingerprint.
         * @param int $port Optional port.
         * @return Result
         */
        public function getRest($password, $server, $username, $fingerprint = null, $port = null) {
            $params = ['password' => $password,
                'server' => $server,
                'username' => $username,
                'fingerprint' => $fingerprint,
                'port' => $port];
            return $this->client->get("/nodes/{$this->node}/scan/pbs", $params);
        }

        /**
         * Scan remote Proxmox Backup Server.
         * @param string $password User password or API token secret.
         * @param string $server The server address (name or IP).
         * @param string $username User-name or API token-ID.
         * @param string $fingerprint Certificate SHA 256 fingerprint.
         * @param int $port Optional port.
         * @return Result
         */
        public function pbsscan($password, $server, $username, $fingerprint = null, $port = null) {
            return $this->getRest($password, $server, $username, $fingerprint, $port);
        }

    }

    /**
     * Class PVEScanNodeNodesGlusterfs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEScanNodeNodesGlusterfs {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Scan remote GlusterFS server.
         * @param string $server The server address (name or IP).
         * @return Result
         */
        public function getRest($server) {
            $params = ['server' => $server];
            return $this->client->get("/nodes/{$this->node}/scan/glusterfs", $params);
        }

        /**
         * Scan remote GlusterFS server.
         * @param string $server The server address (name or IP).
         * @return Result
         */
        public function glusterfsscan($server) {
            return $this->getRest($server);
        }

    }

    /**
     * Class PVEScanNodeNodesIscsi
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEScanNodeNodesIscsi {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Scan remote iSCSI server.
         * @param string $portal The iSCSI portal (IP or DNS name with optional port).
         * @return Result
         */
        public function getRest($portal) {
            $params = ['portal' => $portal];
            return $this->client->get("/nodes/{$this->node}/scan/iscsi", $params);
        }

        /**
         * Scan remote iSCSI server.
         * @param string $portal The iSCSI portal (IP or DNS name with optional port).
         * @return Result
         */
        public function iscsiscan($portal) {
            return $this->getRest($portal);
        }

    }

    /**
     * Class PVEScanNodeNodesLvm
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEScanNodeNodesLvm {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * List local LVM volume groups.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/scan/lvm");
        }

        /**
         * List local LVM volume groups.
         * @return Result
         */
        public function lvmscan() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEScanNodeNodesLvmthin
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEScanNodeNodesLvmthin {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * List local LVM Thin Pools.
         * @param string $vg 
         * @return Result
         */
        public function getRest($vg) {
            $params = ['vg' => $vg];
            return $this->client->get("/nodes/{$this->node}/scan/lvmthin", $params);
        }

        /**
         * List local LVM Thin Pools.
         * @param string $vg 
         * @return Result
         */
        public function lvmthinscan($vg) {
            return $this->getRest($vg);
        }

    }

    /**
     * Class PVEScanNodeNodesZfs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEScanNodeNodesZfs {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Scan zfs pool list on local node.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/scan/zfs");
        }

        /**
         * Scan zfs pool list on local node.
         * @return Result
         */
        public function zfsscan() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesHardware
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesHardware {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $pci;

        /**
         * Get HardwareNodeNodesPci
         * @return PVEHardwareNodeNodesPci
         */
        public function getPci() {
            return $this->pci ?: ($this->pci = new PVEHardwareNodeNodesPci($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $usb;

        /**
         * Get HardwareNodeNodesUsb
         * @return PVEHardwareNodeNodesUsb
         */
        public function getUsb() {
            return $this->usb ?: ($this->usb = new PVEHardwareNodeNodesUsb($this->client, $this->node));
        }

        /**
         * Index of hardware types
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/hardware");
        }

        /**
         * Index of hardware types
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEHardwareNodeNodesPci
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEHardwareNodeNodesPci {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemPciHardwareNodeNodesPciid
         * @param pciid
         * @return PVEItemPciHardwareNodeNodesPciid
         */
        public function get($pciid) {
            return new PVEItemPciHardwareNodeNodesPciid($this->client, $this->node, $pciid);
        }

        /**
         * List local PCI devices.
         * @param string $pci_class_blacklist A list of blacklisted PCI classes, which will not be returned. Following are filtered by default: Memory Controller (05), Bridge (06), Generic System Peripheral (08) and Processor (0b).
         * @param bool $verbose If disabled, does only print the PCI IDs. Otherwise, additional information like vendor and device will be returned.
         * @return Result
         */
        public function getRest($pci_class_blacklist = null, $verbose = null) {
            $params = ['pci-class-blacklist' => $pci_class_blacklist,
                'verbose' => $verbose];
            return $this->client->get("/nodes/{$this->node}/hardware/pci", $params);
        }

        /**
         * List local PCI devices.
         * @param string $pci_class_blacklist A list of blacklisted PCI classes, which will not be returned. Following are filtered by default: Memory Controller (05), Bridge (06), Generic System Peripheral (08) and Processor (0b).
         * @param bool $verbose If disabled, does only print the PCI IDs. Otherwise, additional information like vendor and device will be returned.
         * @return Result
         */
        public function pciscan($pci_class_blacklist = null, $verbose = null) {
            return $this->getRest($pci_class_blacklist, $verbose);
        }

    }

    /**
     * Class PVEItemPciHardwareNodeNodesPciid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemPciHardwareNodeNodesPciid {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $pciid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $pciid) {
            $this->client = $client;
            $this->node = $node;
            $this->pciid = $pciid;
        }

        /**
         * @ignore
         */
        private $mdev;

        /**
         * Get PciidPciHardwareNodeNodesMdev
         * @return PVEPciidPciHardwareNodeNodesMdev
         */
        public function getMdev() {
            return $this->mdev ?: ($this->mdev = new PVEPciidPciHardwareNodeNodesMdev($this->client, $this->node, $this->pciid));
        }

        /**
         * Index of available pci methods
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/hardware/pci/{$this->pciid}");
        }

        /**
         * Index of available pci methods
         * @return Result
         */
        public function pciindex() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEPciidPciHardwareNodeNodesMdev
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEPciidPciHardwareNodeNodesMdev {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $pciid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $pciid) {
            $this->client = $client;
            $this->node = $node;
            $this->pciid = $pciid;
        }

        /**
         * List mediated device types for given PCI device.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/hardware/pci/{$this->pciid}/mdev");
        }

        /**
         * List mediated device types for given PCI device.
         * @return Result
         */
        public function mdevscan() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEHardwareNodeNodesUsb
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEHardwareNodeNodesUsb {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * List local USB devices.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/hardware/usb");
        }

        /**
         * List local USB devices.
         * @return Result
         */
        public function usbscan() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesCapabilities
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesCapabilities {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $qemu;

        /**
         * Get CapabilitiesNodeNodesQemu
         * @return PVECapabilitiesNodeNodesQemu
         */
        public function getQemu() {
            return $this->qemu ?: ($this->qemu = new PVECapabilitiesNodeNodesQemu($this->client, $this->node));
        }

        /**
         * Node capabilities index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/capabilities");
        }

        /**
         * Node capabilities index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECapabilitiesNodeNodesQemu
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECapabilitiesNodeNodesQemu {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $cpu;

        /**
         * Get QemuCapabilitiesNodeNodesCpu
         * @return PVEQemuCapabilitiesNodeNodesCpu
         */
        public function getCpu() {
            return $this->cpu ?: ($this->cpu = new PVEQemuCapabilitiesNodeNodesCpu($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $machines;

        /**
         * Get QemuCapabilitiesNodeNodesMachines
         * @return PVEQemuCapabilitiesNodeNodesMachines
         */
        public function getMachines() {
            return $this->machines ?: ($this->machines = new PVEQemuCapabilitiesNodeNodesMachines($this->client, $this->node));
        }

        /**
         * QEMU capabilities index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/capabilities/qemu");
        }

        /**
         * QEMU capabilities index.
         * @return Result
         */
        public function qemuCapsIndex() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEQemuCapabilitiesNodeNodesCpu
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEQemuCapabilitiesNodeNodesCpu {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * List all custom and default CPU models.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/capabilities/qemu/cpu");
        }

        /**
         * List all custom and default CPU models.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEQemuCapabilitiesNodeNodesMachines
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEQemuCapabilitiesNodeNodesMachines {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get available QEMU/KVM machine types.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/capabilities/qemu/machines");
        }

        /**
         * Get available QEMU/KVM machine types.
         * @return Result
         */
        public function types() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesStorage
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesStorage {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemStorageNodeNodesStorage
         * @param storage
         * @return PVEItemStorageNodeNodesStorage
         */
        public function get($storage) {
            return new PVEItemStorageNodeNodesStorage($this->client, $this->node, $storage);
        }

        /**
         * Get status for all datastores.
         * @param string $content Only list stores which support this content type.
         * @param bool $enabled Only list stores which are enabled (not disabled in config).
         * @param bool $format Include information about formats
         * @param string $storage Only list status for  specified storage
         * @param string $target If target is different to 'node', we only lists shared storages which content is accessible on this 'node' and the specified 'target' node.
         * @return Result
         */
        public function getRest($content = null, $enabled = null, $format = null, $storage = null, $target = null) {
            $params = ['content' => $content,
                'enabled' => $enabled,
                'format' => $format,
                'storage' => $storage,
                'target' => $target];
            return $this->client->get("/nodes/{$this->node}/storage", $params);
        }

        /**
         * Get status for all datastores.
         * @param string $content Only list stores which support this content type.
         * @param bool $enabled Only list stores which are enabled (not disabled in config).
         * @param bool $format Include information about formats
         * @param string $storage Only list status for  specified storage
         * @param string $target If target is different to 'node', we only lists shared storages which content is accessible on this 'node' and the specified 'target' node.
         * @return Result
         */
        public function index($content = null, $enabled = null, $format = null, $storage = null, $target = null) {
            return $this->getRest($content, $enabled, $format, $storage, $target);
        }

    }

    /**
     * Class PVEItemStorageNodeNodesStorage
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemStorageNodeNodesStorage {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * @ignore
         */
        private $prunebackups;

        /**
         * Get StorageStorageNodeNodesPrunebackups
         * @return PVEStorageStorageNodeNodesPrunebackups
         */
        public function getPrunebackups() {
            return $this->prunebackups ?: ($this->prunebackups = new PVEStorageStorageNodeNodesPrunebackups($this->client, $this->node, $this->storage));
        }

        /**
         * @ignore
         */
        private $content;

        /**
         * Get StorageStorageNodeNodesContent
         * @return PVEStorageStorageNodeNodesContent
         */
        public function getContent() {
            return $this->content ?: ($this->content = new PVEStorageStorageNodeNodesContent($this->client, $this->node, $this->storage));
        }

        /**
         * @ignore
         */
        private $file_Restore;

        /**
         * Get StorageStorageNodeNodesFile_Restore
         * @return PVEStorageStorageNodeNodesFile_Restore
         */
        public function getFile_Restore() {
            return $this->file_Restore ?: ($this->file_Restore = new PVEStorageStorageNodeNodesFile_Restore($this->client, $this->node, $this->storage));
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get StorageStorageNodeNodesStatus
         * @return PVEStorageStorageNodeNodesStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVEStorageStorageNodeNodesStatus($this->client, $this->node, $this->storage));
        }

        /**
         * @ignore
         */
        private $rrd;

        /**
         * Get StorageStorageNodeNodesRrd
         * @return PVEStorageStorageNodeNodesRrd
         */
        public function getRrd() {
            return $this->rrd ?: ($this->rrd = new PVEStorageStorageNodeNodesRrd($this->client, $this->node, $this->storage));
        }

        /**
         * @ignore
         */
        private $rrddata;

        /**
         * Get StorageStorageNodeNodesRrddata
         * @return PVEStorageStorageNodeNodesRrddata
         */
        public function getRrddata() {
            return $this->rrddata ?: ($this->rrddata = new PVEStorageStorageNodeNodesRrddata($this->client, $this->node, $this->storage));
        }

        /**
         * @ignore
         */
        private $upload;

        /**
         * Get StorageStorageNodeNodesUpload
         * @return PVEStorageStorageNodeNodesUpload
         */
        public function getUpload() {
            return $this->upload ?: ($this->upload = new PVEStorageStorageNodeNodesUpload($this->client, $this->node, $this->storage));
        }

        /**
         * @ignore
         */
        private $download_Url;

        /**
         * Get StorageStorageNodeNodesDownload_Url
         * @return PVEStorageStorageNodeNodesDownload_Url
         */
        public function getDownload_Url() {
            return $this->download_Url ?: ($this->download_Url = new PVEStorageStorageNodeNodesDownload_Url($this->client, $this->node, $this->storage));
        }

        /**
         * 
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/storage/{$this->storage}");
        }

        /**
         * 
         * @return Result
         */
        public function diridx() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEStorageStorageNodeNodesPrunebackups
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStorageStorageNodeNodesPrunebackups {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * Prune backups. Only those using the standard naming scheme are considered.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param string $type Either 'qemu' or 'lxc'. Only consider backups for guests of this type.
         *   Enum: qemu,lxc
         * @param int $vmid Only prune backups for this VM.
         * @return Result
         */
        public function deleteRest($prune_backups = null, $type = null, $vmid = null) {
            $params = ['prune-backups' => $prune_backups,
                'type' => $type,
                'vmid' => $vmid];
            return $this->client->delete("/nodes/{$this->node}/storage/{$this->storage}/prunebackups", $params);
        }

        /**
         * Prune backups. Only those using the standard naming scheme are considered.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param string $type Either 'qemu' or 'lxc'. Only consider backups for guests of this type.
         *   Enum: qemu,lxc
         * @param int $vmid Only prune backups for this VM.
         * @return Result
         */
        public function delete($prune_backups = null, $type = null, $vmid = null) {
            return $this->deleteRest($prune_backups, $type, $vmid);
        }

        /**
         * Get prune information for backups. NOTE: this is only a preview and might not be what a subsequent prune call does if backups are removed/added in the meantime.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param string $type Either 'qemu' or 'lxc'. Only consider backups for guests of this type.
         *   Enum: qemu,lxc
         * @param int $vmid Only consider backups for this guest.
         * @return Result
         */
        public function getRest($prune_backups = null, $type = null, $vmid = null) {
            $params = ['prune-backups' => $prune_backups,
                'type' => $type,
                'vmid' => $vmid];
            return $this->client->get("/nodes/{$this->node}/storage/{$this->storage}/prunebackups", $params);
        }

        /**
         * Get prune information for backups. NOTE: this is only a preview and might not be what a subsequent prune call does if backups are removed/added in the meantime.
         * @param string $prune_backups Use these retention options instead of those from the storage configuration.
         * @param string $type Either 'qemu' or 'lxc'. Only consider backups for guests of this type.
         *   Enum: qemu,lxc
         * @param int $vmid Only consider backups for this guest.
         * @return Result
         */
        public function dryrun($prune_backups = null, $type = null, $vmid = null) {
            return $this->getRest($prune_backups, $type, $vmid);
        }

    }

    /**
     * Class PVEStorageStorageNodeNodesContent
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStorageStorageNodeNodesContent {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * Get ItemContentStorageStorageNodeNodesVolume
         * @param volume
         * @return PVEItemContentStorageStorageNodeNodesVolume
         */
        public function get($volume) {
            return new PVEItemContentStorageStorageNodeNodesVolume($this->client, $this->node, $this->storage, $volume);
        }

        /**
         * List storage content.
         * @param string $content Only list content of this type.
         * @param int $vmid Only list images for this VM
         * @return Result
         */
        public function getRest($content = null, $vmid = null) {
            $params = ['content' => $content,
                'vmid' => $vmid];
            return $this->client->get("/nodes/{$this->node}/storage/{$this->storage}/content", $params);
        }

        /**
         * List storage content.
         * @param string $content Only list content of this type.
         * @param int $vmid Only list images for this VM
         * @return Result
         */
        public function index($content = null, $vmid = null) {
            return $this->getRest($content, $vmid);
        }

        /**
         * Allocate disk images.
         * @param string $filename The name of the file to create.
         * @param string $size Size in kilobyte (1024 bytes). Optional suffixes 'M' (megabyte, 1024K) and 'G' (gigabyte, 1024M)
         * @param int $vmid Specify owner VM
         * @param string $format 
         *   Enum: raw,qcow2,subvol
         * @return Result
         */
        public function createRest($filename, $size, $vmid, $format = null) {
            $params = ['filename' => $filename,
                'size' => $size,
                'vmid' => $vmid,
                'format' => $format];
            return $this->client->create("/nodes/{$this->node}/storage/{$this->storage}/content", $params);
        }

        /**
         * Allocate disk images.
         * @param string $filename The name of the file to create.
         * @param string $size Size in kilobyte (1024 bytes). Optional suffixes 'M' (megabyte, 1024K) and 'G' (gigabyte, 1024M)
         * @param int $vmid Specify owner VM
         * @param string $format 
         *   Enum: raw,qcow2,subvol
         * @return Result
         */
        public function create($filename, $size, $vmid, $format = null) {
            return $this->createRest($filename, $size, $vmid, $format);
        }

    }

    /**
     * Class PVEItemContentStorageStorageNodeNodesVolume
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemContentStorageStorageNodeNodesVolume {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $volume;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage, $volume) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
            $this->volume = $volume;
        }

        /**
         * Delete volume
         * @param int $delay Time to wait for the task to finish. We return 'null' if the task finish within that time.
         * @return Result
         */
        public function deleteRest($delay = null) {
            $params = ['delay' => $delay];
            return $this->client->delete("/nodes/{$this->node}/storage/{$this->storage}/content/{$this->volume}", $params);
        }

        /**
         * Delete volume
         * @param int $delay Time to wait for the task to finish. We return 'null' if the task finish within that time.
         * @return Result
         */
        public function delete($delay = null) {
            return $this->deleteRest($delay);
        }

        /**
         * Get volume attributes
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/storage/{$this->storage}/content/{$this->volume}");
        }

        /**
         * Get volume attributes
         * @return Result
         */
        public function info() {
            return $this->getRest();
        }

        /**
         * Copy a volume. This is experimental code - do not use.
         * @param string $target Target volume identifier
         * @param string $target_node Target node. Default is local node.
         * @return Result
         */
        public function createRest($target, $target_node = null) {
            $params = ['target' => $target,
                'target_node' => $target_node];
            return $this->client->create("/nodes/{$this->node}/storage/{$this->storage}/content/{$this->volume}", $params);
        }

        /**
         * Copy a volume. This is experimental code - do not use.
         * @param string $target Target volume identifier
         * @param string $target_node Target node. Default is local node.
         * @return Result
         */
        public function copy($target, $target_node = null) {
            return $this->createRest($target, $target_node);
        }

        /**
         * Update volume attributes
         * @param string $notes The new notes.
         * @return Result
         */
        public function setRest($notes = null) {
            $params = ['notes' => $notes];
            return $this->client->set("/nodes/{$this->node}/storage/{$this->storage}/content/{$this->volume}", $params);
        }

        /**
         * Update volume attributes
         * @param string $notes The new notes.
         * @return Result
         */
        public function updateattributes($notes = null) {
            return $this->setRest($notes);
        }

    }

    /**
     * Class PVEStorageStorageNodeNodesFile_Restore
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStorageStorageNodeNodesFile_Restore {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * @ignore
         */
        private $list;

        /**
         * Get File_RestoreStorageStorageNodeNodesList
         * @return PVEFile_RestoreStorageStorageNodeNodesList
         */
        public function getList() {
            return $this->list ?: ($this->list = new PVEFile_RestoreStorageStorageNodeNodesList($this->client, $this->node, $this->storage));
        }

        /**
         * @ignore
         */
        private $download;

        /**
         * Get File_RestoreStorageStorageNodeNodesDownload
         * @return PVEFile_RestoreStorageStorageNodeNodesDownload
         */
        public function getDownload() {
            return $this->download ?: ($this->download = new PVEFile_RestoreStorageStorageNodeNodesDownload($this->client, $this->node, $this->storage));
        }

    }

    /**
     * Class PVEFile_RestoreStorageStorageNodeNodesList
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFile_RestoreStorageStorageNodeNodesList {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * List files and directories for single file restore under the given path.
         * @param string $filepath base64-path to the directory or file being listed, or "/".
         * @param string $volume Backup volume ID or name. Currently only PBS snapshots are supported.
         * @return Result
         */
        public function getRest($filepath, $volume) {
            $params = ['filepath' => $filepath,
                'volume' => $volume];
            return $this->client->get("/nodes/{$this->node}/storage/{$this->storage}/file-restore/list", $params);
        }

        /**
         * List files and directories for single file restore under the given path.
         * @param string $filepath base64-path to the directory or file being listed, or "/".
         * @param string $volume Backup volume ID or name. Currently only PBS snapshots are supported.
         * @return Result
         */
        public function list_($filepath, $volume) {
            return $this->getRest($filepath, $volume);
        }

    }

    /**
     * Class PVEFile_RestoreStorageStorageNodeNodesDownload
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFile_RestoreStorageStorageNodeNodesDownload {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * Extract a file or directory (as zip archive) from a PBS backup.
         * @param string $filepath base64-path to the directory or file to download.
         * @param string $volume Backup volume ID or name. Currently only PBS snapshots are supported.
         * @return Result
         */
        public function getRest($filepath, $volume) {
            $params = ['filepath' => $filepath,
                'volume' => $volume];
            return $this->client->get("/nodes/{$this->node}/storage/{$this->storage}/file-restore/download", $params);
        }

        /**
         * Extract a file or directory (as zip archive) from a PBS backup.
         * @param string $filepath base64-path to the directory or file to download.
         * @param string $volume Backup volume ID or name. Currently only PBS snapshots are supported.
         * @return Result
         */
        public function download($filepath, $volume) {
            return $this->getRest($filepath, $volume);
        }

    }

    /**
     * Class PVEStorageStorageNodeNodesStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStorageStorageNodeNodesStatus {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * Read storage status.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/storage/{$this->storage}/status");
        }

        /**
         * Read storage status.
         * @return Result
         */
        public function readStatus() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEStorageStorageNodeNodesRrd
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStorageStorageNodeNodesRrd {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * Read storage RRD statistics (returns PNG).
         * @param string $ds The list of datasources you want to display.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function getRest($ds, $timeframe, $cf = null) {
            $params = ['ds' => $ds,
                'timeframe' => $timeframe,
                'cf' => $cf];
            return $this->client->get("/nodes/{$this->node}/storage/{$this->storage}/rrd", $params);
        }

        /**
         * Read storage RRD statistics (returns PNG).
         * @param string $ds The list of datasources you want to display.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function rrd($ds, $timeframe, $cf = null) {
            return $this->getRest($ds, $timeframe, $cf);
        }

    }

    /**
     * Class PVEStorageStorageNodeNodesRrddata
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStorageStorageNodeNodesRrddata {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * Read storage RRD statistics.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function getRest($timeframe, $cf = null) {
            $params = ['timeframe' => $timeframe,
                'cf' => $cf];
            return $this->client->get("/nodes/{$this->node}/storage/{$this->storage}/rrddata", $params);
        }

        /**
         * Read storage RRD statistics.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function rrddata($timeframe, $cf = null) {
            return $this->getRest($timeframe, $cf);
        }

    }

    /**
     * Class PVEStorageStorageNodeNodesUpload
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStorageStorageNodeNodesUpload {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * Upload templates and ISO images.
         * @param string $content Content type.
         * @param string $filename The name of the file to create.
         * @param string $tmpfilename The source file name. This parameter is usually set by the REST handler. You can only overwrite it when connecting to the trusted port on localhost.
         * @return Result
         */
        public function createRest($content, $filename, $tmpfilename = null) {
            $params = ['content' => $content,
                'filename' => $filename,
                'tmpfilename' => $tmpfilename];
            return $this->client->create("/nodes/{$this->node}/storage/{$this->storage}/upload", $params);
        }

        /**
         * Upload templates and ISO images.
         * @param string $content Content type.
         * @param string $filename The name of the file to create.
         * @param string $tmpfilename The source file name. This parameter is usually set by the REST handler. You can only overwrite it when connecting to the trusted port on localhost.
         * @return Result
         */
        public function upload($content, $filename, $tmpfilename = null) {
            return $this->createRest($content, $filename, $tmpfilename);
        }

    }

    /**
     * Class PVEStorageStorageNodeNodesDownload_Url
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStorageStorageNodeNodesDownload_Url {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $storage) {
            $this->client = $client;
            $this->node = $node;
            $this->storage = $storage;
        }

        /**
         * Download templates and ISO images by using an URL.
         * @param string $content Content type.
         *   Enum: iso,vztmpl
         * @param string $filename The name of the file to create. Caution: This will be normalized!
         * @param string $url The URL to download the file from.
         * @param string $checksum The expected checksum of the file.
         * @param string $checksum_algorithm The algorithm to calculate the checksum of the file.
         *   Enum: md5,sha1,sha224,sha256,sha384,sha512
         * @param bool $verify_certificates If false, no SSL/TLS certificates will be verified.
         * @return Result
         */
        public function createRest($content, $filename, $url, $checksum = null, $checksum_algorithm = null, $verify_certificates = null) {
            $params = ['content' => $content,
                'filename' => $filename,
                'url' => $url,
                'checksum' => $checksum,
                'checksum-algorithm' => $checksum_algorithm,
                'verify-certificates' => $verify_certificates];
            return $this->client->create("/nodes/{$this->node}/storage/{$this->storage}/download-url", $params);
        }

        /**
         * Download templates and ISO images by using an URL.
         * @param string $content Content type.
         *   Enum: iso,vztmpl
         * @param string $filename The name of the file to create. Caution: This will be normalized!
         * @param string $url The URL to download the file from.
         * @param string $checksum The expected checksum of the file.
         * @param string $checksum_algorithm The algorithm to calculate the checksum of the file.
         *   Enum: md5,sha1,sha224,sha256,sha384,sha512
         * @param bool $verify_certificates If false, no SSL/TLS certificates will be verified.
         * @return Result
         */
        public function downloadUrl($content, $filename, $url, $checksum = null, $checksum_algorithm = null, $verify_certificates = null) {
            return $this->createRest($content, $filename, $url, $checksum, $checksum_algorithm, $verify_certificates);
        }

    }

    /**
     * Class PVENodeNodesDisks
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesDisks {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $lvm;

        /**
         * Get DisksNodeNodesLvm
         * @return PVEDisksNodeNodesLvm
         */
        public function getLvm() {
            return $this->lvm ?: ($this->lvm = new PVEDisksNodeNodesLvm($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $lvmthin;

        /**
         * Get DisksNodeNodesLvmthin
         * @return PVEDisksNodeNodesLvmthin
         */
        public function getLvmthin() {
            return $this->lvmthin ?: ($this->lvmthin = new PVEDisksNodeNodesLvmthin($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $directory;

        /**
         * Get DisksNodeNodesDirectory
         * @return PVEDisksNodeNodesDirectory
         */
        public function getDirectory() {
            return $this->directory ?: ($this->directory = new PVEDisksNodeNodesDirectory($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $zfs;

        /**
         * Get DisksNodeNodesZfs
         * @return PVEDisksNodeNodesZfs
         */
        public function getZfs() {
            return $this->zfs ?: ($this->zfs = new PVEDisksNodeNodesZfs($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $list;

        /**
         * Get DisksNodeNodesList
         * @return PVEDisksNodeNodesList
         */
        public function getList() {
            return $this->list ?: ($this->list = new PVEDisksNodeNodesList($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $smart;

        /**
         * Get DisksNodeNodesSmart
         * @return PVEDisksNodeNodesSmart
         */
        public function getSmart() {
            return $this->smart ?: ($this->smart = new PVEDisksNodeNodesSmart($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $initgpt;

        /**
         * Get DisksNodeNodesInitgpt
         * @return PVEDisksNodeNodesInitgpt
         */
        public function getInitgpt() {
            return $this->initgpt ?: ($this->initgpt = new PVEDisksNodeNodesInitgpt($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $wipedisk;

        /**
         * Get DisksNodeNodesWipedisk
         * @return PVEDisksNodeNodesWipedisk
         */
        public function getWipedisk() {
            return $this->wipedisk ?: ($this->wipedisk = new PVEDisksNodeNodesWipedisk($this->client, $this->node));
        }

        /**
         * Node index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/disks");
        }

        /**
         * Node index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEDisksNodeNodesLvm
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEDisksNodeNodesLvm {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * List LVM Volume Groups
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/disks/lvm");
        }

        /**
         * List LVM Volume Groups
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create an LVM Volume Group
         * @param string $device The block device you want to create the volume group on
         * @param string $name The storage identifier.
         * @param bool $add_storage Configure storage using the Volume Group
         * @return Result
         */
        public function createRest($device, $name, $add_storage = null) {
            $params = ['device' => $device,
                'name' => $name,
                'add_storage' => $add_storage];
            return $this->client->create("/nodes/{$this->node}/disks/lvm", $params);
        }

        /**
         * Create an LVM Volume Group
         * @param string $device The block device you want to create the volume group on
         * @param string $name The storage identifier.
         * @param bool $add_storage Configure storage using the Volume Group
         * @return Result
         */
        public function create($device, $name, $add_storage = null) {
            return $this->createRest($device, $name, $add_storage);
        }

    }

    /**
     * Class PVEDisksNodeNodesLvmthin
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEDisksNodeNodesLvmthin {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * List LVM thinpools
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/disks/lvmthin");
        }

        /**
         * List LVM thinpools
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create an LVM thinpool
         * @param string $device The block device you want to create the thinpool on.
         * @param string $name The storage identifier.
         * @param bool $add_storage Configure storage using the thinpool.
         * @return Result
         */
        public function createRest($device, $name, $add_storage = null) {
            $params = ['device' => $device,
                'name' => $name,
                'add_storage' => $add_storage];
            return $this->client->create("/nodes/{$this->node}/disks/lvmthin", $params);
        }

        /**
         * Create an LVM thinpool
         * @param string $device The block device you want to create the thinpool on.
         * @param string $name The storage identifier.
         * @param bool $add_storage Configure storage using the thinpool.
         * @return Result
         */
        public function create($device, $name, $add_storage = null) {
            return $this->createRest($device, $name, $add_storage);
        }

    }

    /**
     * Class PVEDisksNodeNodesDirectory
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEDisksNodeNodesDirectory {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * PVE Managed Directory storages.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/disks/directory");
        }

        /**
         * PVE Managed Directory storages.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create a Filesystem on an unused disk. Will be mounted under '/mnt/pve/NAME'.
         * @param string $device The block device you want to create the filesystem on.
         * @param string $name The storage identifier.
         * @param bool $add_storage Configure storage using the directory.
         * @param string $filesystem The desired filesystem.
         *   Enum: ext4,xfs
         * @return Result
         */
        public function createRest($device, $name, $add_storage = null, $filesystem = null) {
            $params = ['device' => $device,
                'name' => $name,
                'add_storage' => $add_storage,
                'filesystem' => $filesystem];
            return $this->client->create("/nodes/{$this->node}/disks/directory", $params);
        }

        /**
         * Create a Filesystem on an unused disk. Will be mounted under '/mnt/pve/NAME'.
         * @param string $device The block device you want to create the filesystem on.
         * @param string $name The storage identifier.
         * @param bool $add_storage Configure storage using the directory.
         * @param string $filesystem The desired filesystem.
         *   Enum: ext4,xfs
         * @return Result
         */
        public function create($device, $name, $add_storage = null, $filesystem = null) {
            return $this->createRest($device, $name, $add_storage, $filesystem);
        }

    }

    /**
     * Class PVEDisksNodeNodesZfs
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEDisksNodeNodesZfs {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemZfsDisksNodeNodesName
         * @param name
         * @return PVEItemZfsDisksNodeNodesName
         */
        public function get($name) {
            return new PVEItemZfsDisksNodeNodesName($this->client, $this->node, $name);
        }

        /**
         * List Zpools.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/disks/zfs");
        }

        /**
         * List Zpools.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create a ZFS pool.
         * @param string $devices The block devices you want to create the zpool on.
         * @param string $name The storage identifier.
         * @param string $raidlevel The RAID level to use.
         *   Enum: single,mirror,raid10,raidz,raidz2,raidz3
         * @param bool $add_storage Configure storage using the zpool.
         * @param int $ashift Pool sector size exponent.
         * @param string $compression The compression algorithm to use.
         *   Enum: on,off,gzip,lz4,lzjb,zle
         * @return Result
         */
        public function createRest($devices, $name, $raidlevel, $add_storage = null, $ashift = null, $compression = null) {
            $params = ['devices' => $devices,
                'name' => $name,
                'raidlevel' => $raidlevel,
                'add_storage' => $add_storage,
                'ashift' => $ashift,
                'compression' => $compression];
            return $this->client->create("/nodes/{$this->node}/disks/zfs", $params);
        }

        /**
         * Create a ZFS pool.
         * @param string $devices The block devices you want to create the zpool on.
         * @param string $name The storage identifier.
         * @param string $raidlevel The RAID level to use.
         *   Enum: single,mirror,raid10,raidz,raidz2,raidz3
         * @param bool $add_storage Configure storage using the zpool.
         * @param int $ashift Pool sector size exponent.
         * @param string $compression The compression algorithm to use.
         *   Enum: on,off,gzip,lz4,lzjb,zle
         * @return Result
         */
        public function create($devices, $name, $raidlevel, $add_storage = null, $ashift = null, $compression = null) {
            return $this->createRest($devices, $name, $raidlevel, $add_storage, $ashift, $compression);
        }

    }

    /**
     * Class PVEItemZfsDisksNodeNodesName
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemZfsDisksNodeNodesName {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $name;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $name) {
            $this->client = $client;
            $this->node = $node;
            $this->name = $name;
        }

        /**
         * Get details about a zpool.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/disks/zfs/{$this->name}");
        }

        /**
         * Get details about a zpool.
         * @return Result
         */
        public function detail() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEDisksNodeNodesList
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEDisksNodeNodesList {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * List local disks.
         * @param bool $include_partitions Also include partitions.
         * @param bool $skipsmart Skip smart checks.
         * @param string $type Only list specific types of disks.
         *   Enum: unused,journal_disks
         * @return Result
         */
        public function getRest($include_partitions = null, $skipsmart = null, $type = null) {
            $params = ['include-partitions' => $include_partitions,
                'skipsmart' => $skipsmart,
                'type' => $type];
            return $this->client->get("/nodes/{$this->node}/disks/list", $params);
        }

        /**
         * List local disks.
         * @param bool $include_partitions Also include partitions.
         * @param bool $skipsmart Skip smart checks.
         * @param string $type Only list specific types of disks.
         *   Enum: unused,journal_disks
         * @return Result
         */
        public function list_($include_partitions = null, $skipsmart = null, $type = null) {
            return $this->getRest($include_partitions, $skipsmart, $type);
        }

    }

    /**
     * Class PVEDisksNodeNodesSmart
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEDisksNodeNodesSmart {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get SMART Health of a disk.
         * @param string $disk Block device name
         * @param bool $healthonly If true returns only the health status
         * @return Result
         */
        public function getRest($disk, $healthonly = null) {
            $params = ['disk' => $disk,
                'healthonly' => $healthonly];
            return $this->client->get("/nodes/{$this->node}/disks/smart", $params);
        }

        /**
         * Get SMART Health of a disk.
         * @param string $disk Block device name
         * @param bool $healthonly If true returns only the health status
         * @return Result
         */
        public function smart($disk, $healthonly = null) {
            return $this->getRest($disk, $healthonly);
        }

    }

    /**
     * Class PVEDisksNodeNodesInitgpt
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEDisksNodeNodesInitgpt {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Initialize Disk with GPT
         * @param string $disk Block device name
         * @param string $uuid UUID for the GPT table
         * @return Result
         */
        public function createRest($disk, $uuid = null) {
            $params = ['disk' => $disk,
                'uuid' => $uuid];
            return $this->client->create("/nodes/{$this->node}/disks/initgpt", $params);
        }

        /**
         * Initialize Disk with GPT
         * @param string $disk Block device name
         * @param string $uuid UUID for the GPT table
         * @return Result
         */
        public function initgpt($disk, $uuid = null) {
            return $this->createRest($disk, $uuid);
        }

    }

    /**
     * Class PVEDisksNodeNodesWipedisk
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEDisksNodeNodesWipedisk {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Wipe a disk or partition.
         * @param string $disk Block device name
         * @return Result
         */
        public function setRest($disk) {
            $params = ['disk' => $disk];
            return $this->client->set("/nodes/{$this->node}/disks/wipedisk", $params);
        }

        /**
         * Wipe a disk or partition.
         * @param string $disk Block device name
         * @return Result
         */
        public function wipeDisk($disk) {
            return $this->setRest($disk);
        }

    }

    /**
     * Class PVENodeNodesApt
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesApt {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $update;

        /**
         * Get AptNodeNodesUpdate
         * @return PVEAptNodeNodesUpdate
         */
        public function getUpdate() {
            return $this->update ?: ($this->update = new PVEAptNodeNodesUpdate($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $changelog;

        /**
         * Get AptNodeNodesChangelog
         * @return PVEAptNodeNodesChangelog
         */
        public function getChangelog() {
            return $this->changelog ?: ($this->changelog = new PVEAptNodeNodesChangelog($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $repositories;

        /**
         * Get AptNodeNodesRepositories
         * @return PVEAptNodeNodesRepositories
         */
        public function getRepositories() {
            return $this->repositories ?: ($this->repositories = new PVEAptNodeNodesRepositories($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $versions;

        /**
         * Get AptNodeNodesVersions
         * @return PVEAptNodeNodesVersions
         */
        public function getVersions() {
            return $this->versions ?: ($this->versions = new PVEAptNodeNodesVersions($this->client, $this->node));
        }

        /**
         * Directory index for apt (Advanced Package Tool).
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/apt");
        }

        /**
         * Directory index for apt (Advanced Package Tool).
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAptNodeNodesUpdate
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAptNodeNodesUpdate {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * List available updates.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/apt/update");
        }

        /**
         * List available updates.
         * @return Result
         */
        public function listUpdates() {
            return $this->getRest();
        }

        /**
         * This is used to resynchronize the package index files from their sources (apt-get update).
         * @param bool $notify Send notification mail about new packages (to email address specified for user 'root@pam').
         * @param bool $quiet Only produces output suitable for logging, omitting progress indicators.
         * @return Result
         */
        public function createRest($notify = null, $quiet = null) {
            $params = ['notify' => $notify,
                'quiet' => $quiet];
            return $this->client->create("/nodes/{$this->node}/apt/update", $params);
        }

        /**
         * This is used to resynchronize the package index files from their sources (apt-get update).
         * @param bool $notify Send notification mail about new packages (to email address specified for user 'root@pam').
         * @param bool $quiet Only produces output suitable for logging, omitting progress indicators.
         * @return Result
         */
        public function updateDatabase($notify = null, $quiet = null) {
            return $this->createRest($notify, $quiet);
        }

    }

    /**
     * Class PVEAptNodeNodesChangelog
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAptNodeNodesChangelog {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get package changelogs.
         * @param string $name Package name.
         * @param string $version Package version.
         * @return Result
         */
        public function getRest($name, $version = null) {
            $params = ['name' => $name,
                'version' => $version];
            return $this->client->get("/nodes/{$this->node}/apt/changelog", $params);
        }

        /**
         * Get package changelogs.
         * @param string $name Package name.
         * @param string $version Package version.
         * @return Result
         */
        public function changelog($name, $version = null) {
            return $this->getRest($name, $version);
        }

    }

    /**
     * Class PVEAptNodeNodesRepositories
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAptNodeNodesRepositories {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get APT repository information.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/apt/repositories");
        }

        /**
         * Get APT repository information.
         * @return Result
         */
        public function repositories() {
            return $this->getRest();
        }

        /**
         * Change the properties of a repository. Currently only allows enabling/disabling.
         * @param int $index Index within the file (starting from 0).
         * @param string $path Path to the containing file.
         * @param string $digest Digest to detect modifications.
         * @param bool $enabled Whether the repository should be enabled or not.
         * @return Result
         */
        public function createRest($index, $path, $digest = null, $enabled = null) {
            $params = ['index' => $index,
                'path' => $path,
                'digest' => $digest,
                'enabled' => $enabled];
            return $this->client->create("/nodes/{$this->node}/apt/repositories", $params);
        }

        /**
         * Change the properties of a repository. Currently only allows enabling/disabling.
         * @param int $index Index within the file (starting from 0).
         * @param string $path Path to the containing file.
         * @param string $digest Digest to detect modifications.
         * @param bool $enabled Whether the repository should be enabled or not.
         * @return Result
         */
        public function changeRepository($index, $path, $digest = null, $enabled = null) {
            return $this->createRest($index, $path, $digest, $enabled);
        }

        /**
         * Add a standard repository to the configuration
         * @param string $handle Handle that identifies a repository.
         * @param string $digest Digest to detect modifications.
         * @return Result
         */
        public function setRest($handle, $digest = null) {
            $params = ['handle' => $handle,
                'digest' => $digest];
            return $this->client->set("/nodes/{$this->node}/apt/repositories", $params);
        }

        /**
         * Add a standard repository to the configuration
         * @param string $handle Handle that identifies a repository.
         * @param string $digest Digest to detect modifications.
         * @return Result
         */
        public function addRepository($handle, $digest = null) {
            return $this->setRest($handle, $digest);
        }

    }

    /**
     * Class PVEAptNodeNodesVersions
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAptNodeNodesVersions {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get package information for important Proxmox packages.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/apt/versions");
        }

        /**
         * Get package information for important Proxmox packages.
         * @return Result
         */
        public function versions() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesFirewall
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesFirewall {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $rules;

        /**
         * Get FirewallNodeNodesRules
         * @return PVEFirewallNodeNodesRules
         */
        public function getRules() {
            return $this->rules ?: ($this->rules = new PVEFirewallNodeNodesRules($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $options;

        /**
         * Get FirewallNodeNodesOptions
         * @return PVEFirewallNodeNodesOptions
         */
        public function getOptions() {
            return $this->options ?: ($this->options = new PVEFirewallNodeNodesOptions($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $log;

        /**
         * Get FirewallNodeNodesLog
         * @return PVEFirewallNodeNodesLog
         */
        public function getLog() {
            return $this->log ?: ($this->log = new PVEFirewallNodeNodesLog($this->client, $this->node));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/firewall");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEFirewallNodeNodesRules
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallNodeNodesRules {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemRulesFirewallNodeNodesPos
         * @param pos
         * @return PVEItemRulesFirewallNodeNodesPos
         */
        public function get($pos) {
            return new PVEItemRulesFirewallNodeNodesPos($this->client, $this->node, $pos);
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/firewall/rules");
        }

        /**
         * List rules.
         * @return Result
         */
        public function getRules() {
            return $this->getRest();
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRest($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            $params = ['action' => $action,
                'type' => $type,
                'comment' => $comment,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'pos' => $pos,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport];
            return $this->client->create("/nodes/{$this->node}/firewall/rules", $params);
        }

        /**
         * Create new rule.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @param string $comment Descriptive comment.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $pos Update rule at position &amp;lt;pos&amp;gt;.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @return Result
         */
        public function createRule($action, $type, $comment = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $pos = null, $proto = null, $source = null, $sport = null) {
            return $this->createRest($action, $type, $comment, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $pos, $proto, $source, $sport);
        }

    }

    /**
     * Class PVEItemRulesFirewallNodeNodesPos
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemRulesFirewallNodeNodesPos {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $pos;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $pos) {
            $this->client = $client;
            $this->node = $node;
            $this->pos = $pos;
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRest($digest = null) {
            $params = ['digest' => $digest];
            return $this->client->delete("/nodes/{$this->node}/firewall/rules/{$this->pos}", $params);
        }

        /**
         * Delete rule.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function deleteRule($digest = null) {
            return $this->deleteRest($digest);
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/firewall/rules/{$this->pos}");
        }

        /**
         * Get single rule data.
         * @return Result
         */
        public function getRule() {
            return $this->getRest();
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function setRest($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            $params = ['action' => $action,
                'comment' => $comment,
                'delete' => $delete,
                'dest' => $dest,
                'digest' => $digest,
                'dport' => $dport,
                'enable' => $enable,
                'icmp-type' => $icmp_type,
                'iface' => $iface,
                'log' => $log,
                'macro' => $macro,
                'moveto' => $moveto,
                'proto' => $proto,
                'source' => $source,
                'sport' => $sport,
                'type' => $type];
            return $this->client->set("/nodes/{$this->node}/firewall/rules/{$this->pos}", $params);
        }

        /**
         * Modify rule data.
         * @param string $action Rule action ('ACCEPT', 'DROP', 'REJECT') or security group name.
         * @param string $comment Descriptive comment.
         * @param string $delete A list of settings you want to delete.
         * @param string $dest Restrict packet destination address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $dport Restrict TCP/UDP destination port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param int $enable Flag to enable/disable a rule.
         * @param string $icmp_type Specify icmp-type. Only valid if proto equals 'icmp'.
         * @param string $iface Network interface name. You have to use network configuration key names for VMs and containers ('net\d+'). Host related rules can use arbitrary strings.
         * @param string $log Log level for firewall rule.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $macro Use predefined standard macro.
         * @param int $moveto Move rule to new position &amp;lt;moveto&amp;gt;. Other arguments are ignored.
         * @param string $proto IP protocol. You can use protocol names ('tcp'/'udp') or simple numbers, as defined in '/etc/protocols'.
         * @param string $source Restrict packet source address. This can refer to a single IP address, an IP set ('+ipsetname') or an IP alias definition. You can also specify an address range like '20.34.101.207-201.3.9.99', or a list of IP addresses and networks (entries are separated by comma). Please do not mix IPv4 and IPv6 addresses inside such lists.
         * @param string $sport Restrict TCP/UDP source port. You can use service names or simple numbers (0-65535), as defined in '/etc/services'. Port ranges can be specified with '\d+:\d+', for example '80:85', and you can use comma separated list to match several ports or ranges.
         * @param string $type Rule type.
         *   Enum: in,out,group
         * @return Result
         */
        public function updateRule($action = null, $comment = null, $delete = null, $dest = null, $digest = null, $dport = null, $enable = null, $icmp_type = null, $iface = null, $log = null, $macro = null, $moveto = null, $proto = null, $source = null, $sport = null, $type = null) {
            return $this->setRest($action, $comment, $delete, $dest, $digest, $dport, $enable, $icmp_type, $iface, $log, $macro, $moveto, $proto, $source, $sport, $type);
        }

    }

    /**
     * Class PVEFirewallNodeNodesOptions
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallNodeNodesOptions {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get host firewall options.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/firewall/options");
        }

        /**
         * Get host firewall options.
         * @return Result
         */
        public function getOptions() {
            return $this->getRest();
        }

        /**
         * Set Firewall options.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $enable Enable host firewall rules.
         * @param string $log_level_in Log level for incoming traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $log_level_out Log level for outgoing traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param bool $log_nf_conntrack Enable logging of conntrack information.
         * @param bool $ndp Enable NDP (Neighbor Discovery Protocol).
         * @param bool $nf_conntrack_allow_invalid Allow invalid packets on connection tracking.
         * @param int $nf_conntrack_max Maximum number of tracked connections.
         * @param int $nf_conntrack_tcp_timeout_established Conntrack established timeout.
         * @param int $nf_conntrack_tcp_timeout_syn_recv Conntrack syn recv timeout.
         * @param bool $nosmurfs Enable SMURFS filter.
         * @param bool $protection_synflood Enable synflood protection
         * @param int $protection_synflood_burst Synflood protection rate burst by ip src.
         * @param int $protection_synflood_rate Synflood protection rate syn/sec by ip src.
         * @param string $smurf_log_level Log level for SMURFS filter.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $tcp_flags_log_level Log level for illegal tcp flags filter.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param bool $tcpflags Filter illegal combinations of TCP flags.
         * @return Result
         */
        public function setRest($delete = null, $digest = null, $enable = null, $log_level_in = null, $log_level_out = null, $log_nf_conntrack = null, $ndp = null, $nf_conntrack_allow_invalid = null, $nf_conntrack_max = null, $nf_conntrack_tcp_timeout_established = null, $nf_conntrack_tcp_timeout_syn_recv = null, $nosmurfs = null, $protection_synflood = null, $protection_synflood_burst = null, $protection_synflood_rate = null, $smurf_log_level = null, $tcp_flags_log_level = null, $tcpflags = null) {
            $params = ['delete' => $delete,
                'digest' => $digest,
                'enable' => $enable,
                'log_level_in' => $log_level_in,
                'log_level_out' => $log_level_out,
                'log_nf_conntrack' => $log_nf_conntrack,
                'ndp' => $ndp,
                'nf_conntrack_allow_invalid' => $nf_conntrack_allow_invalid,
                'nf_conntrack_max' => $nf_conntrack_max,
                'nf_conntrack_tcp_timeout_established' => $nf_conntrack_tcp_timeout_established,
                'nf_conntrack_tcp_timeout_syn_recv' => $nf_conntrack_tcp_timeout_syn_recv,
                'nosmurfs' => $nosmurfs,
                'protection_synflood' => $protection_synflood,
                'protection_synflood_burst' => $protection_synflood_burst,
                'protection_synflood_rate' => $protection_synflood_rate,
                'smurf_log_level' => $smurf_log_level,
                'tcp_flags_log_level' => $tcp_flags_log_level,
                'tcpflags' => $tcpflags];
            return $this->client->set("/nodes/{$this->node}/firewall/options", $params);
        }

        /**
         * Set Firewall options.
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $enable Enable host firewall rules.
         * @param string $log_level_in Log level for incoming traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $log_level_out Log level for outgoing traffic.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param bool $log_nf_conntrack Enable logging of conntrack information.
         * @param bool $ndp Enable NDP (Neighbor Discovery Protocol).
         * @param bool $nf_conntrack_allow_invalid Allow invalid packets on connection tracking.
         * @param int $nf_conntrack_max Maximum number of tracked connections.
         * @param int $nf_conntrack_tcp_timeout_established Conntrack established timeout.
         * @param int $nf_conntrack_tcp_timeout_syn_recv Conntrack syn recv timeout.
         * @param bool $nosmurfs Enable SMURFS filter.
         * @param bool $protection_synflood Enable synflood protection
         * @param int $protection_synflood_burst Synflood protection rate burst by ip src.
         * @param int $protection_synflood_rate Synflood protection rate syn/sec by ip src.
         * @param string $smurf_log_level Log level for SMURFS filter.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param string $tcp_flags_log_level Log level for illegal tcp flags filter.
         *   Enum: emerg,alert,crit,err,warning,notice,info,debug,nolog
         * @param bool $tcpflags Filter illegal combinations of TCP flags.
         * @return Result
         */
        public function setOptions($delete = null, $digest = null, $enable = null, $log_level_in = null, $log_level_out = null, $log_nf_conntrack = null, $ndp = null, $nf_conntrack_allow_invalid = null, $nf_conntrack_max = null, $nf_conntrack_tcp_timeout_established = null, $nf_conntrack_tcp_timeout_syn_recv = null, $nosmurfs = null, $protection_synflood = null, $protection_synflood_burst = null, $protection_synflood_rate = null, $smurf_log_level = null, $tcp_flags_log_level = null, $tcpflags = null) {
            return $this->setRest($delete, $digest, $enable, $log_level_in, $log_level_out, $log_nf_conntrack, $ndp, $nf_conntrack_allow_invalid, $nf_conntrack_max, $nf_conntrack_tcp_timeout_established, $nf_conntrack_tcp_timeout_syn_recv, $nosmurfs, $protection_synflood, $protection_synflood_burst, $protection_synflood_rate, $smurf_log_level, $tcp_flags_log_level, $tcpflags);
        }

    }

    /**
     * Class PVEFirewallNodeNodesLog
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEFirewallNodeNodesLog {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read firewall log
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function getRest($limit = null, $start = null) {
            $params = ['limit' => $limit,
                'start' => $start];
            return $this->client->get("/nodes/{$this->node}/firewall/log", $params);
        }

        /**
         * Read firewall log
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function log($limit = null, $start = null) {
            return $this->getRest($limit, $start);
        }

    }

    /**
     * Class PVENodeNodesReplication
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesReplication {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemReplicationNodeNodesId
         * @param id
         * @return PVEItemReplicationNodeNodesId
         */
        public function get($id) {
            return new PVEItemReplicationNodeNodesId($this->client, $this->node, $id);
        }

        /**
         * List status of all replication jobs on this node.
         * @param int $guest Only list replication jobs for this guest.
         * @return Result
         */
        public function getRest($guest = null) {
            $params = ['guest' => $guest];
            return $this->client->get("/nodes/{$this->node}/replication", $params);
        }

        /**
         * List status of all replication jobs on this node.
         * @param int $guest Only list replication jobs for this guest.
         * @return Result
         */
        public function status($guest = null) {
            return $this->getRest($guest);
        }

    }

    /**
     * Class PVEItemReplicationNodeNodesId
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemReplicationNodeNodesId {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $id) {
            $this->client = $client;
            $this->node = $node;
            $this->id = $id;
        }

        /**
         * @ignore
         */
        private $status;

        /**
         * Get IdReplicationNodeNodesStatus
         * @return PVEIdReplicationNodeNodesStatus
         */
        public function getStatus() {
            return $this->status ?: ($this->status = new PVEIdReplicationNodeNodesStatus($this->client, $this->node, $this->id));
        }

        /**
         * @ignore
         */
        private $log;

        /**
         * Get IdReplicationNodeNodesLog
         * @return PVEIdReplicationNodeNodesLog
         */
        public function getLog() {
            return $this->log ?: ($this->log = new PVEIdReplicationNodeNodesLog($this->client, $this->node, $this->id));
        }

        /**
         * @ignore
         */
        private $scheduleNow;

        /**
         * Get IdReplicationNodeNodesScheduleNow
         * @return PVEIdReplicationNodeNodesScheduleNow
         */
        public function getScheduleNow() {
            return $this->scheduleNow ?: ($this->scheduleNow = new PVEIdReplicationNodeNodesScheduleNow($this->client, $this->node, $this->id));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/replication/{$this->id}");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEIdReplicationNodeNodesStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEIdReplicationNodeNodesStatus {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $id) {
            $this->client = $client;
            $this->node = $node;
            $this->id = $id;
        }

        /**
         * Get replication job status.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/replication/{$this->id}/status");
        }

        /**
         * Get replication job status.
         * @return Result
         */
        public function jobStatus() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEIdReplicationNodeNodesLog
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEIdReplicationNodeNodesLog {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $id) {
            $this->client = $client;
            $this->node = $node;
            $this->id = $id;
        }

        /**
         * Read replication job log.
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function getRest($limit = null, $start = null) {
            $params = ['limit' => $limit,
                'start' => $start];
            return $this->client->get("/nodes/{$this->node}/replication/{$this->id}/log", $params);
        }

        /**
         * Read replication job log.
         * @param int $limit 
         * @param int $start 
         * @return Result
         */
        public function readJobLog($limit = null, $start = null) {
            return $this->getRest($limit, $start);
        }

    }

    /**
     * Class PVEIdReplicationNodeNodesScheduleNow
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEIdReplicationNodeNodesScheduleNow {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $id;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $id) {
            $this->client = $client;
            $this->node = $node;
            $this->id = $id;
        }

        /**
         * Schedule replication job to start as soon as possible.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/replication/{$this->id}/schedule_now");
        }

        /**
         * Schedule replication job to start as soon as possible.
         * @return Result
         */
        public function scheduleNow() {
            return $this->createRest();
        }

    }

    /**
     * Class PVENodeNodesCertificates
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesCertificates {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $acme;

        /**
         * Get CertificatesNodeNodesAcme
         * @return PVECertificatesNodeNodesAcme
         */
        public function getAcme() {
            return $this->acme ?: ($this->acme = new PVECertificatesNodeNodesAcme($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $info;

        /**
         * Get CertificatesNodeNodesInfo
         * @return PVECertificatesNodeNodesInfo
         */
        public function getInfo() {
            return $this->info ?: ($this->info = new PVECertificatesNodeNodesInfo($this->client, $this->node));
        }

        /**
         * @ignore
         */
        private $custom;

        /**
         * Get CertificatesNodeNodesCustom
         * @return PVECertificatesNodeNodesCustom
         */
        public function getCustom() {
            return $this->custom ?: ($this->custom = new PVECertificatesNodeNodesCustom($this->client, $this->node));
        }

        /**
         * Node index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/certificates");
        }

        /**
         * Node index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECertificatesNodeNodesAcme
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECertificatesNodeNodesAcme {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $certificate;

        /**
         * Get AcmeCertificatesNodeNodesCertificate
         * @return PVEAcmeCertificatesNodeNodesCertificate
         */
        public function getCertificate() {
            return $this->certificate ?: ($this->certificate = new PVEAcmeCertificatesNodeNodesCertificate($this->client, $this->node));
        }

        /**
         * ACME index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/certificates/acme");
        }

        /**
         * ACME index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAcmeCertificatesNodeNodesCertificate
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAcmeCertificatesNodeNodesCertificate {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Revoke existing certificate from CA.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/nodes/{$this->node}/certificates/acme/certificate");
        }

        /**
         * Revoke existing certificate from CA.
         * @return Result
         */
        public function revokeCertificate() {
            return $this->deleteRest();
        }

        /**
         * Order a new certificate from ACME-compatible CA.
         * @param bool $force Overwrite existing custom certificate.
         * @return Result
         */
        public function createRest($force = null) {
            $params = ['force' => $force];
            return $this->client->create("/nodes/{$this->node}/certificates/acme/certificate", $params);
        }

        /**
         * Order a new certificate from ACME-compatible CA.
         * @param bool $force Overwrite existing custom certificate.
         * @return Result
         */
        public function newCertificate($force = null) {
            return $this->createRest($force);
        }

        /**
         * Renew existing certificate from CA.
         * @param bool $force Force renewal even if expiry is more than 30 days away.
         * @return Result
         */
        public function setRest($force = null) {
            $params = ['force' => $force];
            return $this->client->set("/nodes/{$this->node}/certificates/acme/certificate", $params);
        }

        /**
         * Renew existing certificate from CA.
         * @param bool $force Force renewal even if expiry is more than 30 days away.
         * @return Result
         */
        public function renewCertificate($force = null) {
            return $this->setRest($force);
        }

    }

    /**
     * Class PVECertificatesNodeNodesInfo
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECertificatesNodeNodesInfo {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get information about node's certificates.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/certificates/info");
        }

        /**
         * Get information about node's certificates.
         * @return Result
         */
        public function info() {
            return $this->getRest();
        }

    }

    /**
     * Class PVECertificatesNodeNodesCustom
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVECertificatesNodeNodesCustom {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * DELETE custom certificate chain and key.
         * @param bool $restart Restart pveproxy.
         * @return Result
         */
        public function deleteRest($restart = null) {
            $params = ['restart' => $restart];
            return $this->client->delete("/nodes/{$this->node}/certificates/custom", $params);
        }

        /**
         * DELETE custom certificate chain and key.
         * @param bool $restart Restart pveproxy.
         * @return Result
         */
        public function removeCustomCert($restart = null) {
            return $this->deleteRest($restart);
        }

        /**
         * Upload or update custom certificate chain and key.
         * @param string $certificates PEM encoded certificate (chain).
         * @param bool $force Overwrite existing custom or ACME certificate files.
         * @param string $key PEM encoded private key.
         * @param bool $restart Restart pveproxy.
         * @return Result
         */
        public function createRest($certificates, $force = null, $key = null, $restart = null) {
            $params = ['certificates' => $certificates,
                'force' => $force,
                'key' => $key,
                'restart' => $restart];
            return $this->client->create("/nodes/{$this->node}/certificates/custom", $params);
        }

        /**
         * Upload or update custom certificate chain and key.
         * @param string $certificates PEM encoded certificate (chain).
         * @param bool $force Overwrite existing custom or ACME certificate files.
         * @param string $key PEM encoded private key.
         * @param bool $restart Restart pveproxy.
         * @return Result
         */
        public function uploadCustomCert($certificates, $force = null, $key = null, $restart = null) {
            return $this->createRest($certificates, $force, $key, $restart);
        }

    }

    /**
     * Class PVENodeNodesConfig
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesConfig {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get node configuration options.
         * @param string $property Return only a specific property from the node configuration.
         *   Enum: acme,acmedomain0,acmedomain1,acmedomain2,acmedomain3,acmedomain4,acmedomain5,description,startall-onboot-delay,wakeonlan
         * @return Result
         */
        public function getRest($property = null) {
            $params = ['property' => $property];
            return $this->client->get("/nodes/{$this->node}/config", $params);
        }

        /**
         * Get node configuration options.
         * @param string $property Return only a specific property from the node configuration.
         *   Enum: acme,acmedomain0,acmedomain1,acmedomain2,acmedomain3,acmedomain4,acmedomain5,description,startall-onboot-delay,wakeonlan
         * @return Result
         */
        public function getConfig($property = null) {
            return $this->getRest($property);
        }

        /**
         * Set node configuration options.
         * @param string $acme Node specific ACME settings.
         * @param array $acmedomainN ACME domain and validation plugin
         * @param string $delete A list of settings you want to delete.
         * @param string $description Description for the Node. Shown in the web-interface node notes panel. This is saved as comment inside the configuration file.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param int $startall_onboot_delay Initial delay in seconds, before starting all the Virtual Guests with on-boot enabled.
         * @param string $wakeonlan MAC address for wake on LAN
         * @return Result
         */
        public function setRest($acme = null, $acmedomainN = null, $delete = null, $description = null, $digest = null, $startall_onboot_delay = null, $wakeonlan = null) {
            $params = ['acme' => $acme,
                'delete' => $delete,
                'description' => $description,
                'digest' => $digest,
                'startall-onboot-delay' => $startall_onboot_delay,
                'wakeonlan' => $wakeonlan];
            $this->client->addIndexedParameter($params, 'acmedomain', $acmedomainN);
            return $this->client->set("/nodes/{$this->node}/config", $params);
        }

        /**
         * Set node configuration options.
         * @param string $acme Node specific ACME settings.
         * @param array $acmedomainN ACME domain and validation plugin
         * @param string $delete A list of settings you want to delete.
         * @param string $description Description for the Node. Shown in the web-interface node notes panel. This is saved as comment inside the configuration file.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param int $startall_onboot_delay Initial delay in seconds, before starting all the Virtual Guests with on-boot enabled.
         * @param string $wakeonlan MAC address for wake on LAN
         * @return Result
         */
        public function setOptions($acme = null, $acmedomainN = null, $delete = null, $description = null, $digest = null, $startall_onboot_delay = null, $wakeonlan = null) {
            return $this->setRest($acme, $acmedomainN, $delete, $description, $digest, $startall_onboot_delay, $wakeonlan);
        }

    }

    /**
     * Class PVENodeNodesSdn
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesSdn {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * @ignore
         */
        private $zones;

        /**
         * Get SdnNodeNodesZones
         * @return PVESdnNodeNodesZones
         */
        public function getZones() {
            return $this->zones ?: ($this->zones = new PVESdnNodeNodesZones($this->client, $this->node));
        }

        /**
         * SDN index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/sdn");
        }

        /**
         * SDN index.
         * @return Result
         */
        public function sdnindex() {
            return $this->getRest();
        }

    }

    /**
     * Class PVESdnNodeNodesZones
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVESdnNodeNodesZones {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get ItemZonesSdnNodeNodesZone
         * @param zone
         * @return PVEItemZonesSdnNodeNodesZone
         */
        public function get($zone) {
            return new PVEItemZonesSdnNodeNodesZone($this->client, $this->node, $zone);
        }

        /**
         * Get status for all zones.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/sdn/zones");
        }

        /**
         * Get status for all zones.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemZonesSdnNodeNodesZone
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemZonesSdnNodeNodesZone {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $zone;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $zone) {
            $this->client = $client;
            $this->node = $node;
            $this->zone = $zone;
        }

        /**
         * @ignore
         */
        private $content;

        /**
         * Get ZoneZonesSdnNodeNodesContent
         * @return PVEZoneZonesSdnNodeNodesContent
         */
        public function getContent() {
            return $this->content ?: ($this->content = new PVEZoneZonesSdnNodeNodesContent($this->client, $this->node, $this->zone));
        }

        /**
         * 
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/sdn/zones/{$this->zone}");
        }

        /**
         * 
         * @return Result
         */
        public function diridx() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEZoneZonesSdnNodeNodesContent
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEZoneZonesSdnNodeNodesContent {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $zone;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node, $zone) {
            $this->client = $client;
            $this->node = $node;
            $this->zone = $zone;
        }

        /**
         * List zone content.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/sdn/zones/{$this->zone}/content");
        }

        /**
         * List zone content.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesVersion
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesVersion {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * API version details
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/version");
        }

        /**
         * API version details
         * @return Result
         */
        public function version() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesStatus
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesStatus {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read node status
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/status");
        }

        /**
         * Read node status
         * @return Result
         */
        public function status() {
            return $this->getRest();
        }

        /**
         * Reboot or shutdown a node.
         * @param string $command Specify the command.
         *   Enum: reboot,shutdown
         * @return Result
         */
        public function createRest($command) {
            $params = ['command' => $command];
            return $this->client->create("/nodes/{$this->node}/status", $params);
        }

        /**
         * Reboot or shutdown a node.
         * @param string $command Specify the command.
         *   Enum: reboot,shutdown
         * @return Result
         */
        public function nodeCmd($command) {
            return $this->createRest($command);
        }

    }

    /**
     * Class PVENodeNodesNetstat
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesNetstat {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read tap/vm network device interface counters
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/netstat");
        }

        /**
         * Read tap/vm network device interface counters
         * @return Result
         */
        public function netstat() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesExecute
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesExecute {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Execute multiple commands in order.
         * @param string $commands JSON encoded array of commands.
         * @return Result
         */
        public function createRest($commands) {
            $params = ['commands' => $commands];
            return $this->client->create("/nodes/{$this->node}/execute", $params);
        }

        /**
         * Execute multiple commands in order.
         * @param string $commands JSON encoded array of commands.
         * @return Result
         */
        public function execute($commands) {
            return $this->createRest($commands);
        }

    }

    /**
     * Class PVENodeNodesWakeonlan
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesWakeonlan {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Try to wake a node via 'wake on LAN' network packet.
         * @return Result
         */
        public function createRest() {
            return $this->client->create("/nodes/{$this->node}/wakeonlan");
        }

        /**
         * Try to wake a node via 'wake on LAN' network packet.
         * @return Result
         */
        public function wakeonlan() {
            return $this->createRest();
        }

    }

    /**
     * Class PVENodeNodesRrd
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesRrd {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read node RRD statistics (returns PNG)
         * @param string $ds The list of datasources you want to display.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function getRest($ds, $timeframe, $cf = null) {
            $params = ['ds' => $ds,
                'timeframe' => $timeframe,
                'cf' => $cf];
            return $this->client->get("/nodes/{$this->node}/rrd", $params);
        }

        /**
         * Read node RRD statistics (returns PNG)
         * @param string $ds The list of datasources you want to display.
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function rrd($ds, $timeframe, $cf = null) {
            return $this->getRest($ds, $timeframe, $cf);
        }

    }

    /**
     * Class PVENodeNodesRrddata
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesRrddata {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read node RRD statistics
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function getRest($timeframe, $cf = null) {
            $params = ['timeframe' => $timeframe,
                'cf' => $cf];
            return $this->client->get("/nodes/{$this->node}/rrddata", $params);
        }

        /**
         * Read node RRD statistics
         * @param string $timeframe Specify the time frame you are interested in.
         *   Enum: hour,day,week,month,year
         * @param string $cf The RRD consolidation function
         *   Enum: AVERAGE,MAX
         * @return Result
         */
        public function rrddata($timeframe, $cf = null) {
            return $this->getRest($timeframe, $cf);
        }

    }

    /**
     * Class PVENodeNodesSyslog
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesSyslog {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read system log
         * @param int $limit 
         * @param string $service Service ID
         * @param string $since Display all log since this date-time string.
         * @param int $start 
         * @param string $until Display all log until this date-time string.
         * @return Result
         */
        public function getRest($limit = null, $service = null, $since = null, $start = null, $until = null) {
            $params = ['limit' => $limit,
                'service' => $service,
                'since' => $since,
                'start' => $start,
                'until' => $until];
            return $this->client->get("/nodes/{$this->node}/syslog", $params);
        }

        /**
         * Read system log
         * @param int $limit 
         * @param string $service Service ID
         * @param string $since Display all log since this date-time string.
         * @param int $start 
         * @param string $until Display all log until this date-time string.
         * @return Result
         */
        public function syslog($limit = null, $service = null, $since = null, $start = null, $until = null) {
            return $this->getRest($limit, $service, $since, $start, $until);
        }

    }

    /**
     * Class PVENodeNodesJournal
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesJournal {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read Journal
         * @param string $endcursor End before the given Cursor. Conflicts with 'until'
         * @param int $lastentries Limit to the last X lines. Conflicts with a range.
         * @param int $since Display all log since this UNIX epoch. Conflicts with 'startcursor'.
         * @param string $startcursor Start after the given Cursor. Conflicts with 'since'
         * @param int $until Display all log until this UNIX epoch. Conflicts with 'endcursor'.
         * @return Result
         */
        public function getRest($endcursor = null, $lastentries = null, $since = null, $startcursor = null, $until = null) {
            $params = ['endcursor' => $endcursor,
                'lastentries' => $lastentries,
                'since' => $since,
                'startcursor' => $startcursor,
                'until' => $until];
            return $this->client->get("/nodes/{$this->node}/journal", $params);
        }

        /**
         * Read Journal
         * @param string $endcursor End before the given Cursor. Conflicts with 'until'
         * @param int $lastentries Limit to the last X lines. Conflicts with a range.
         * @param int $since Display all log since this UNIX epoch. Conflicts with 'startcursor'.
         * @param string $startcursor Start after the given Cursor. Conflicts with 'since'
         * @param int $until Display all log until this UNIX epoch. Conflicts with 'endcursor'.
         * @return Result
         */
        public function journal($endcursor = null, $lastentries = null, $since = null, $startcursor = null, $until = null) {
            return $this->getRest($endcursor, $lastentries, $since, $startcursor, $until);
        }

    }

    /**
     * Class PVENodeNodesVncshell
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesVncshell {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Creates a VNC Shell proxy.
         * @param string $cmd Run specific command or default to login.
         *   Enum: login,ceph_install,upgrade
         * @param string $cmd_opts Add parameters to a command. Encoded as null terminated strings.
         * @param int $height sets the height of the console in pixels.
         * @param bool $websocket use websocket instead of standard vnc.
         * @param int $width sets the width of the console in pixels.
         * @return Result
         */
        public function createRest($cmd = null, $cmd_opts = null, $height = null, $websocket = null, $width = null) {
            $params = ['cmd' => $cmd,
                'cmd-opts' => $cmd_opts,
                'height' => $height,
                'websocket' => $websocket,
                'width' => $width];
            return $this->client->create("/nodes/{$this->node}/vncshell", $params);
        }

        /**
         * Creates a VNC Shell proxy.
         * @param string $cmd Run specific command or default to login.
         *   Enum: login,ceph_install,upgrade
         * @param string $cmd_opts Add parameters to a command. Encoded as null terminated strings.
         * @param int $height sets the height of the console in pixels.
         * @param bool $websocket use websocket instead of standard vnc.
         * @param int $width sets the width of the console in pixels.
         * @return Result
         */
        public function vncshell($cmd = null, $cmd_opts = null, $height = null, $websocket = null, $width = null) {
            return $this->createRest($cmd, $cmd_opts, $height, $websocket, $width);
        }

    }

    /**
     * Class PVENodeNodesTermproxy
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesTermproxy {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Creates a VNC Shell proxy.
         * @param string $cmd Run specific command or default to login.
         *   Enum: login,ceph_install,upgrade
         * @param string $cmd_opts Add parameters to a command. Encoded as null terminated strings.
         * @return Result
         */
        public function createRest($cmd = null, $cmd_opts = null) {
            $params = ['cmd' => $cmd,
                'cmd-opts' => $cmd_opts];
            return $this->client->create("/nodes/{$this->node}/termproxy", $params);
        }

        /**
         * Creates a VNC Shell proxy.
         * @param string $cmd Run specific command or default to login.
         *   Enum: login,ceph_install,upgrade
         * @param string $cmd_opts Add parameters to a command. Encoded as null terminated strings.
         * @return Result
         */
        public function termproxy($cmd = null, $cmd_opts = null) {
            return $this->createRest($cmd, $cmd_opts);
        }

    }

    /**
     * Class PVENodeNodesVncwebsocket
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesVncwebsocket {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Opens a websocket for VNC traffic.
         * @param int $port Port number returned by previous vncproxy call.
         * @param string $vncticket Ticket from previous call to vncproxy.
         * @return Result
         */
        public function getRest($port, $vncticket) {
            $params = ['port' => $port,
                'vncticket' => $vncticket];
            return $this->client->get("/nodes/{$this->node}/vncwebsocket", $params);
        }

        /**
         * Opens a websocket for VNC traffic.
         * @param int $port Port number returned by previous vncproxy call.
         * @param string $vncticket Ticket from previous call to vncproxy.
         * @return Result
         */
        public function vncwebsocket($port, $vncticket) {
            return $this->getRest($port, $vncticket);
        }

    }

    /**
     * Class PVENodeNodesSpiceshell
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesSpiceshell {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Creates a SPICE shell.
         * @param string $cmd Run specific command or default to login.
         *   Enum: login,ceph_install,upgrade
         * @param string $cmd_opts Add parameters to a command. Encoded as null terminated strings.
         * @param string $proxy SPICE proxy server. This can be used by the client to specify the proxy server. All nodes in a cluster runs 'spiceproxy', so it is up to the client to choose one. By default, we return the node where the VM is currently running. As reasonable setting is to use same node you use to connect to the API (This is window.location.hostname for the JS GUI).
         * @return Result
         */
        public function createRest($cmd = null, $cmd_opts = null, $proxy = null) {
            $params = ['cmd' => $cmd,
                'cmd-opts' => $cmd_opts,
                'proxy' => $proxy];
            return $this->client->create("/nodes/{$this->node}/spiceshell", $params);
        }

        /**
         * Creates a SPICE shell.
         * @param string $cmd Run specific command or default to login.
         *   Enum: login,ceph_install,upgrade
         * @param string $cmd_opts Add parameters to a command. Encoded as null terminated strings.
         * @param string $proxy SPICE proxy server. This can be used by the client to specify the proxy server. All nodes in a cluster runs 'spiceproxy', so it is up to the client to choose one. By default, we return the node where the VM is currently running. As reasonable setting is to use same node you use to connect to the API (This is window.location.hostname for the JS GUI).
         * @return Result
         */
        public function spiceshell($cmd = null, $cmd_opts = null, $proxy = null) {
            return $this->createRest($cmd, $cmd_opts, $proxy);
        }

    }

    /**
     * Class PVENodeNodesDns
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesDns {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read DNS settings.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/dns");
        }

        /**
         * Read DNS settings.
         * @return Result
         */
        public function dns() {
            return $this->getRest();
        }

        /**
         * Write DNS settings.
         * @param string $search Search domain for host-name lookup.
         * @param string $dns1 First name server IP address.
         * @param string $dns2 Second name server IP address.
         * @param string $dns3 Third name server IP address.
         * @return Result
         */
        public function setRest($search, $dns1 = null, $dns2 = null, $dns3 = null) {
            $params = ['search' => $search,
                'dns1' => $dns1,
                'dns2' => $dns2,
                'dns3' => $dns3];
            return $this->client->set("/nodes/{$this->node}/dns", $params);
        }

        /**
         * Write DNS settings.
         * @param string $search Search domain for host-name lookup.
         * @param string $dns1 First name server IP address.
         * @param string $dns2 Second name server IP address.
         * @param string $dns3 Third name server IP address.
         * @return Result
         */
        public function updateDns($search, $dns1 = null, $dns2 = null, $dns3 = null) {
            return $this->setRest($search, $dns1, $dns2, $dns3);
        }

    }

    /**
     * Class PVENodeNodesTime
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesTime {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Read server time and time zone settings.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/time");
        }

        /**
         * Read server time and time zone settings.
         * @return Result
         */
        public function time() {
            return $this->getRest();
        }

        /**
         * Set time zone.
         * @param string $timezone Time zone. The file '/usr/share/zoneinfo/zone.tab' contains the list of valid names.
         * @return Result
         */
        public function setRest($timezone) {
            $params = ['timezone' => $timezone];
            return $this->client->set("/nodes/{$this->node}/time", $params);
        }

        /**
         * Set time zone.
         * @param string $timezone Time zone. The file '/usr/share/zoneinfo/zone.tab' contains the list of valid names.
         * @return Result
         */
        public function setTimezone($timezone) {
            return $this->setRest($timezone);
        }

    }

    /**
     * Class PVENodeNodesAplinfo
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesAplinfo {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get list of appliances.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/aplinfo");
        }

        /**
         * Get list of appliances.
         * @return Result
         */
        public function aplinfo() {
            return $this->getRest();
        }

        /**
         * Download appliance templates.
         * @param string $storage The storage where the template will be stored
         * @param string $template The template which will downloaded
         * @return Result
         */
        public function createRest($storage, $template) {
            $params = ['storage' => $storage,
                'template' => $template];
            return $this->client->create("/nodes/{$this->node}/aplinfo", $params);
        }

        /**
         * Download appliance templates.
         * @param string $storage The storage where the template will be stored
         * @param string $template The template which will downloaded
         * @return Result
         */
        public function aplDownload($storage, $template) {
            return $this->createRest($storage, $template);
        }

    }

    /**
     * Class PVENodeNodesReport
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesReport {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Gather various systems information about a node
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/report");
        }

        /**
         * Gather various systems information about a node
         * @return Result
         */
        public function report() {
            return $this->getRest();
        }

    }

    /**
     * Class PVENodeNodesStartall
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesStartall {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Start all VMs and containers located on this node (by default only those with onboot=1).
         * @param bool $force Issue start command even if virtual guest have 'onboot' not set or set to off.
         * @param string $vms Only consider guests from this comma separated list of VMIDs.
         * @return Result
         */
        public function createRest($force = null, $vms = null) {
            $params = ['force' => $force,
                'vms' => $vms];
            return $this->client->create("/nodes/{$this->node}/startall", $params);
        }

        /**
         * Start all VMs and containers located on this node (by default only those with onboot=1).
         * @param bool $force Issue start command even if virtual guest have 'onboot' not set or set to off.
         * @param string $vms Only consider guests from this comma separated list of VMIDs.
         * @return Result
         */
        public function startall($force = null, $vms = null) {
            return $this->createRest($force, $vms);
        }

    }

    /**
     * Class PVENodeNodesStopall
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesStopall {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Stop all VMs and Containers.
         * @param string $vms Only consider Guests with these IDs.
         * @return Result
         */
        public function createRest($vms = null) {
            $params = ['vms' => $vms];
            return $this->client->create("/nodes/{$this->node}/stopall", $params);
        }

        /**
         * Stop all VMs and Containers.
         * @param string $vms Only consider Guests with these IDs.
         * @return Result
         */
        public function stopall($vms = null) {
            return $this->createRest($vms);
        }

    }

    /**
     * Class PVENodeNodesMigrateall
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesMigrateall {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Migrate all VMs and Containers.
         * @param string $target Target node.
         * @param int $maxworkers Maximal number of parallel migration job. If not set use 'max_workers' from datacenter.cfg, one of both must be set!
         * @param string $vms Only consider Guests with these IDs.
         * @param bool $with_local_disks Enable live storage migration for local disk
         * @return Result
         */
        public function createRest($target, $maxworkers = null, $vms = null, $with_local_disks = null) {
            $params = ['target' => $target,
                'maxworkers' => $maxworkers,
                'vms' => $vms,
                'with-local-disks' => $with_local_disks];
            return $this->client->create("/nodes/{$this->node}/migrateall", $params);
        }

        /**
         * Migrate all VMs and Containers.
         * @param string $target Target node.
         * @param int $maxworkers Maximal number of parallel migration job. If not set use 'max_workers' from datacenter.cfg, one of both must be set!
         * @param string $vms Only consider Guests with these IDs.
         * @param bool $with_local_disks Enable live storage migration for local disk
         * @return Result
         */
        public function migrateall($target, $maxworkers = null, $vms = null, $with_local_disks = null) {
            return $this->createRest($target, $maxworkers, $vms, $with_local_disks);
        }

    }

    /**
     * Class PVENodeNodesHosts
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVENodeNodesHosts {

        /**
         * @ignore
         */
        private $node;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $node) {
            $this->client = $client;
            $this->node = $node;
        }

        /**
         * Get the content of /etc/hosts.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/nodes/{$this->node}/hosts");
        }

        /**
         * Get the content of /etc/hosts.
         * @return Result
         */
        public function getEtcHosts() {
            return $this->getRest();
        }

        /**
         * Write /etc/hosts.
         * @param string $data The target content of /etc/hosts.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function createRest($data, $digest = null) {
            $params = ['data' => $data,
                'digest' => $digest];
            return $this->client->create("/nodes/{$this->node}/hosts", $params);
        }

        /**
         * Write /etc/hosts.
         * @param string $data The target content of /etc/hosts.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @return Result
         */
        public function writeEtcHosts($data, $digest = null) {
            return $this->createRest($data, $digest);
        }

    }

    /**
     * Class PVEStorage
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEStorage {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemStorageStorage
         * @param storage
         * @return PVEItemStorageStorage
         */
        public function get($storage) {
            return new PVEItemStorageStorage($this->client, $storage);
        }

        /**
         * Storage index.
         * @param string $type Only list storage of specific type
         *   Enum: btrfs,cephfs,cifs,dir,glusterfs,iscsi,iscsidirect,lvm,lvmthin,nfs,pbs,rbd,zfs,zfspool
         * @return Result
         */
        public function getRest($type = null) {
            $params = ['type' => $type];
            return $this->client->get("/storage", $params);
        }

        /**
         * Storage index.
         * @param string $type Only list storage of specific type
         *   Enum: btrfs,cephfs,cifs,dir,glusterfs,iscsi,iscsidirect,lvm,lvmthin,nfs,pbs,rbd,zfs,zfspool
         * @return Result
         */
        public function index($type = null) {
            return $this->getRest($type);
        }

        /**
         * Create a new storage.
         * @param string $storage The storage identifier.
         * @param string $type Storage type.
         *   Enum: btrfs,cephfs,cifs,dir,glusterfs,iscsi,iscsidirect,lvm,lvmthin,nfs,pbs,rbd,zfs,zfspool
         * @param string $authsupported Authsupported.
         * @param string $base Base volume. This volume is automatically activated.
         * @param string $blocksize block size
         * @param string $bwlimit Set bandwidth/io limits various operations.
         * @param string $comstar_hg host group for comstar views
         * @param string $comstar_tg target group for comstar views
         * @param string $content Allowed content types.  NOTE: the value 'rootdir' is used for Containers, and value 'images' for VMs. 
         * @param string $datastore Proxmox Backup Server datastore name.
         * @param bool $disable Flag to disable the storage.
         * @param string $domain CIFS domain.
         * @param string $encryption_key Encryption key. Use 'autogen' to generate one automatically without passphrase.
         * @param string $export NFS export path.
         * @param string $fingerprint Certificate SHA 256 fingerprint.
         * @param string $format Default image format.
         * @param bool $fuse Mount CephFS through FUSE.
         * @param string $is_mountpoint Assume the given path is an externally managed mountpoint and consider the storage offline if it is not mounted. Using a boolean (yes/no) value serves as a shortcut to using the target path in this field.
         * @param string $iscsiprovider iscsi provider
         * @param bool $krbd Always access rbd through krbd kernel module.
         * @param string $lio_tpg target portal group for Linux LIO targets
         * @param string $master_pubkey Base64-encoded, PEM-formatted public RSA key. Used to encrypt a copy of the encryption-key which will be added to each encrypted backup.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per VM. Use '0' for unlimited.
         * @param bool $mkdir Create the directory if it doesn't exist.
         * @param string $monhost IP addresses of monitors (for external clusters).
         * @param string $mountpoint mount point
         * @param string $namespace RBD Namespace.
         * @param bool $nocow Set the NOCOW flag on files. Disables data checksumming and causes data errors to be unrecoverable from while allowing direct I/O. Only use this if data does not need to be any more safe than on a single ext4 formatted disk with no underlying raid system.
         * @param string $nodes List of cluster node names.
         * @param bool $nowritecache disable write caching on the target
         * @param string $options NFS mount options (see 'man nfs')
         * @param string $password Password for accessing the share/datastore.
         * @param string $path File system path.
         * @param string $pool Pool.
         * @param int $port For non default port.
         * @param string $portal iSCSI portal (IP or DNS name with optional port).
         * @param string $prune_backups The retention options with shorter intervals are processed first with --keep-last being the very first one. Each option covers a specific period of time. We say that backups within this period are covered by this option. The next option does not take care of already covered backups and only considers older backups.
         * @param bool $saferemove Zero-out data when removing LVs.
         * @param string $saferemove_throughput Wipe throughput (cstream -t parameter value).
         * @param string $server Server IP or DNS name.
         * @param string $server2 Backup volfile server IP or DNS name.
         * @param string $share CIFS share.
         * @param bool $shared Mark storage as shared.
         * @param string $smbversion SMB protocol version
         *   Enum: 2.0,2.1,3.0
         * @param bool $sparse use sparse volumes
         * @param string $subdir Subdir to mount.
         * @param bool $tagged_only Only use logical volumes tagged with 'pve-vm-ID'.
         * @param string $target iSCSI target.
         * @param string $thinpool LVM thin pool LV name.
         * @param string $transport Gluster transport: tcp or rdma
         *   Enum: tcp,rdma,unix
         * @param string $username RBD Id.
         * @param string $vgname Volume group name.
         * @param string $volume Glusterfs Volume.
         * @return Result
         */
        public function createRest($storage, $type, $authsupported = null, $base = null, $blocksize = null, $bwlimit = null, $comstar_hg = null, $comstar_tg = null, $content = null, $datastore = null, $disable = null, $domain = null, $encryption_key = null, $export = null, $fingerprint = null, $format = null, $fuse = null, $is_mountpoint = null, $iscsiprovider = null, $krbd = null, $lio_tpg = null, $master_pubkey = null, $maxfiles = null, $mkdir = null, $monhost = null, $mountpoint = null, $namespace = null, $nocow = null, $nodes = null, $nowritecache = null, $options = null, $password = null, $path = null, $pool = null, $port = null, $portal = null, $prune_backups = null, $saferemove = null, $saferemove_throughput = null, $server = null, $server2 = null, $share = null, $shared = null, $smbversion = null, $sparse = null, $subdir = null, $tagged_only = null, $target = null, $thinpool = null, $transport = null, $username = null, $vgname = null, $volume = null) {
            $params = ['storage' => $storage,
                'type' => $type,
                'authsupported' => $authsupported,
                'base' => $base,
                'blocksize' => $blocksize,
                'bwlimit' => $bwlimit,
                'comstar_hg' => $comstar_hg,
                'comstar_tg' => $comstar_tg,
                'content' => $content,
                'datastore' => $datastore,
                'disable' => $disable,
                'domain' => $domain,
                'encryption-key' => $encryption_key,
                'export' => $export,
                'fingerprint' => $fingerprint,
                'format' => $format,
                'fuse' => $fuse,
                'is_mountpoint' => $is_mountpoint,
                'iscsiprovider' => $iscsiprovider,
                'krbd' => $krbd,
                'lio_tpg' => $lio_tpg,
                'master-pubkey' => $master_pubkey,
                'maxfiles' => $maxfiles,
                'mkdir' => $mkdir,
                'monhost' => $monhost,
                'mountpoint' => $mountpoint,
                'namespace' => $namespace,
                'nocow' => $nocow,
                'nodes' => $nodes,
                'nowritecache' => $nowritecache,
                'options' => $options,
                'password' => $password,
                'path' => $path,
                'pool' => $pool,
                'port' => $port,
                'portal' => $portal,
                'prune-backups' => $prune_backups,
                'saferemove' => $saferemove,
                'saferemove_throughput' => $saferemove_throughput,
                'server' => $server,
                'server2' => $server2,
                'share' => $share,
                'shared' => $shared,
                'smbversion' => $smbversion,
                'sparse' => $sparse,
                'subdir' => $subdir,
                'tagged_only' => $tagged_only,
                'target' => $target,
                'thinpool' => $thinpool,
                'transport' => $transport,
                'username' => $username,
                'vgname' => $vgname,
                'volume' => $volume];
            return $this->client->create("/storage", $params);
        }

        /**
         * Create a new storage.
         * @param string $storage The storage identifier.
         * @param string $type Storage type.
         *   Enum: btrfs,cephfs,cifs,dir,glusterfs,iscsi,iscsidirect,lvm,lvmthin,nfs,pbs,rbd,zfs,zfspool
         * @param string $authsupported Authsupported.
         * @param string $base Base volume. This volume is automatically activated.
         * @param string $blocksize block size
         * @param string $bwlimit Set bandwidth/io limits various operations.
         * @param string $comstar_hg host group for comstar views
         * @param string $comstar_tg target group for comstar views
         * @param string $content Allowed content types.  NOTE: the value 'rootdir' is used for Containers, and value 'images' for VMs. 
         * @param string $datastore Proxmox Backup Server datastore name.
         * @param bool $disable Flag to disable the storage.
         * @param string $domain CIFS domain.
         * @param string $encryption_key Encryption key. Use 'autogen' to generate one automatically without passphrase.
         * @param string $export NFS export path.
         * @param string $fingerprint Certificate SHA 256 fingerprint.
         * @param string $format Default image format.
         * @param bool $fuse Mount CephFS through FUSE.
         * @param string $is_mountpoint Assume the given path is an externally managed mountpoint and consider the storage offline if it is not mounted. Using a boolean (yes/no) value serves as a shortcut to using the target path in this field.
         * @param string $iscsiprovider iscsi provider
         * @param bool $krbd Always access rbd through krbd kernel module.
         * @param string $lio_tpg target portal group for Linux LIO targets
         * @param string $master_pubkey Base64-encoded, PEM-formatted public RSA key. Used to encrypt a copy of the encryption-key which will be added to each encrypted backup.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per VM. Use '0' for unlimited.
         * @param bool $mkdir Create the directory if it doesn't exist.
         * @param string $monhost IP addresses of monitors (for external clusters).
         * @param string $mountpoint mount point
         * @param string $namespace RBD Namespace.
         * @param bool $nocow Set the NOCOW flag on files. Disables data checksumming and causes data errors to be unrecoverable from while allowing direct I/O. Only use this if data does not need to be any more safe than on a single ext4 formatted disk with no underlying raid system.
         * @param string $nodes List of cluster node names.
         * @param bool $nowritecache disable write caching on the target
         * @param string $options NFS mount options (see 'man nfs')
         * @param string $password Password for accessing the share/datastore.
         * @param string $path File system path.
         * @param string $pool Pool.
         * @param int $port For non default port.
         * @param string $portal iSCSI portal (IP or DNS name with optional port).
         * @param string $prune_backups The retention options with shorter intervals are processed first with --keep-last being the very first one. Each option covers a specific period of time. We say that backups within this period are covered by this option. The next option does not take care of already covered backups and only considers older backups.
         * @param bool $saferemove Zero-out data when removing LVs.
         * @param string $saferemove_throughput Wipe throughput (cstream -t parameter value).
         * @param string $server Server IP or DNS name.
         * @param string $server2 Backup volfile server IP or DNS name.
         * @param string $share CIFS share.
         * @param bool $shared Mark storage as shared.
         * @param string $smbversion SMB protocol version
         *   Enum: 2.0,2.1,3.0
         * @param bool $sparse use sparse volumes
         * @param string $subdir Subdir to mount.
         * @param bool $tagged_only Only use logical volumes tagged with 'pve-vm-ID'.
         * @param string $target iSCSI target.
         * @param string $thinpool LVM thin pool LV name.
         * @param string $transport Gluster transport: tcp or rdma
         *   Enum: tcp,rdma,unix
         * @param string $username RBD Id.
         * @param string $vgname Volume group name.
         * @param string $volume Glusterfs Volume.
         * @return Result
         */
        public function create($storage, $type, $authsupported = null, $base = null, $blocksize = null, $bwlimit = null, $comstar_hg = null, $comstar_tg = null, $content = null, $datastore = null, $disable = null, $domain = null, $encryption_key = null, $export = null, $fingerprint = null, $format = null, $fuse = null, $is_mountpoint = null, $iscsiprovider = null, $krbd = null, $lio_tpg = null, $master_pubkey = null, $maxfiles = null, $mkdir = null, $monhost = null, $mountpoint = null, $namespace = null, $nocow = null, $nodes = null, $nowritecache = null, $options = null, $password = null, $path = null, $pool = null, $port = null, $portal = null, $prune_backups = null, $saferemove = null, $saferemove_throughput = null, $server = null, $server2 = null, $share = null, $shared = null, $smbversion = null, $sparse = null, $subdir = null, $tagged_only = null, $target = null, $thinpool = null, $transport = null, $username = null, $vgname = null, $volume = null) {
            return $this->createRest($storage, $type, $authsupported, $base, $blocksize, $bwlimit, $comstar_hg, $comstar_tg, $content, $datastore, $disable, $domain, $encryption_key, $export, $fingerprint, $format, $fuse, $is_mountpoint, $iscsiprovider, $krbd, $lio_tpg, $master_pubkey, $maxfiles, $mkdir, $monhost, $mountpoint, $namespace, $nocow, $nodes, $nowritecache, $options, $password, $path, $pool, $port, $portal, $prune_backups, $saferemove, $saferemove_throughput, $server, $server2, $share, $shared, $smbversion, $sparse, $subdir, $tagged_only, $target, $thinpool, $transport, $username, $vgname, $volume);
        }

    }

    /**
     * Class PVEItemStorageStorage
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemStorageStorage {

        /**
         * @ignore
         */
        private $storage;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $storage) {
            $this->client = $client;
            $this->storage = $storage;
        }

        /**
         * Delete storage configuration.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/storage/{$this->storage}");
        }

        /**
         * Delete storage configuration.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Read storage configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/storage/{$this->storage}");
        }

        /**
         * Read storage configuration.
         * @return Result
         */
        public function read() {
            return $this->getRest();
        }

        /**
         * Update storage configuration.
         * @param string $blocksize block size
         * @param string $bwlimit Set bandwidth/io limits various operations.
         * @param string $comstar_hg host group for comstar views
         * @param string $comstar_tg target group for comstar views
         * @param string $content Allowed content types.  NOTE: the value 'rootdir' is used for Containers, and value 'images' for VMs. 
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $disable Flag to disable the storage.
         * @param string $domain CIFS domain.
         * @param string $encryption_key Encryption key. Use 'autogen' to generate one automatically without passphrase.
         * @param string $fingerprint Certificate SHA 256 fingerprint.
         * @param string $format Default image format.
         * @param bool $fuse Mount CephFS through FUSE.
         * @param string $is_mountpoint Assume the given path is an externally managed mountpoint and consider the storage offline if it is not mounted. Using a boolean (yes/no) value serves as a shortcut to using the target path in this field.
         * @param bool $krbd Always access rbd through krbd kernel module.
         * @param string $lio_tpg target portal group for Linux LIO targets
         * @param string $master_pubkey Base64-encoded, PEM-formatted public RSA key. Used to encrypt a copy of the encryption-key which will be added to each encrypted backup.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per VM. Use '0' for unlimited.
         * @param bool $mkdir Create the directory if it doesn't exist.
         * @param string $monhost IP addresses of monitors (for external clusters).
         * @param string $mountpoint mount point
         * @param string $namespace RBD Namespace.
         * @param bool $nocow Set the NOCOW flag on files. Disables data checksumming and causes data errors to be unrecoverable from while allowing direct I/O. Only use this if data does not need to be any more safe than on a single ext4 formatted disk with no underlying raid system.
         * @param string $nodes List of cluster node names.
         * @param bool $nowritecache disable write caching on the target
         * @param string $options NFS mount options (see 'man nfs')
         * @param string $password Password for accessing the share/datastore.
         * @param string $pool Pool.
         * @param int $port For non default port.
         * @param string $prune_backups The retention options with shorter intervals are processed first with --keep-last being the very first one. Each option covers a specific period of time. We say that backups within this period are covered by this option. The next option does not take care of already covered backups and only considers older backups.
         * @param bool $saferemove Zero-out data when removing LVs.
         * @param string $saferemove_throughput Wipe throughput (cstream -t parameter value).
         * @param string $server Server IP or DNS name.
         * @param string $server2 Backup volfile server IP or DNS name.
         * @param bool $shared Mark storage as shared.
         * @param string $smbversion SMB protocol version
         *   Enum: 2.0,2.1,3.0
         * @param bool $sparse use sparse volumes
         * @param string $subdir Subdir to mount.
         * @param bool $tagged_only Only use logical volumes tagged with 'pve-vm-ID'.
         * @param string $transport Gluster transport: tcp or rdma
         *   Enum: tcp,rdma,unix
         * @param string $username RBD Id.
         * @return Result
         */
        public function setRest($blocksize = null, $bwlimit = null, $comstar_hg = null, $comstar_tg = null, $content = null, $delete = null, $digest = null, $disable = null, $domain = null, $encryption_key = null, $fingerprint = null, $format = null, $fuse = null, $is_mountpoint = null, $krbd = null, $lio_tpg = null, $master_pubkey = null, $maxfiles = null, $mkdir = null, $monhost = null, $mountpoint = null, $namespace = null, $nocow = null, $nodes = null, $nowritecache = null, $options = null, $password = null, $pool = null, $port = null, $prune_backups = null, $saferemove = null, $saferemove_throughput = null, $server = null, $server2 = null, $shared = null, $smbversion = null, $sparse = null, $subdir = null, $tagged_only = null, $transport = null, $username = null) {
            $params = ['blocksize' => $blocksize,
                'bwlimit' => $bwlimit,
                'comstar_hg' => $comstar_hg,
                'comstar_tg' => $comstar_tg,
                'content' => $content,
                'delete' => $delete,
                'digest' => $digest,
                'disable' => $disable,
                'domain' => $domain,
                'encryption-key' => $encryption_key,
                'fingerprint' => $fingerprint,
                'format' => $format,
                'fuse' => $fuse,
                'is_mountpoint' => $is_mountpoint,
                'krbd' => $krbd,
                'lio_tpg' => $lio_tpg,
                'master-pubkey' => $master_pubkey,
                'maxfiles' => $maxfiles,
                'mkdir' => $mkdir,
                'monhost' => $monhost,
                'mountpoint' => $mountpoint,
                'namespace' => $namespace,
                'nocow' => $nocow,
                'nodes' => $nodes,
                'nowritecache' => $nowritecache,
                'options' => $options,
                'password' => $password,
                'pool' => $pool,
                'port' => $port,
                'prune-backups' => $prune_backups,
                'saferemove' => $saferemove,
                'saferemove_throughput' => $saferemove_throughput,
                'server' => $server,
                'server2' => $server2,
                'shared' => $shared,
                'smbversion' => $smbversion,
                'sparse' => $sparse,
                'subdir' => $subdir,
                'tagged_only' => $tagged_only,
                'transport' => $transport,
                'username' => $username];
            return $this->client->set("/storage/{$this->storage}", $params);
        }

        /**
         * Update storage configuration.
         * @param string $blocksize block size
         * @param string $bwlimit Set bandwidth/io limits various operations.
         * @param string $comstar_hg host group for comstar views
         * @param string $comstar_tg target group for comstar views
         * @param string $content Allowed content types.  NOTE: the value 'rootdir' is used for Containers, and value 'images' for VMs. 
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param bool $disable Flag to disable the storage.
         * @param string $domain CIFS domain.
         * @param string $encryption_key Encryption key. Use 'autogen' to generate one automatically without passphrase.
         * @param string $fingerprint Certificate SHA 256 fingerprint.
         * @param string $format Default image format.
         * @param bool $fuse Mount CephFS through FUSE.
         * @param string $is_mountpoint Assume the given path is an externally managed mountpoint and consider the storage offline if it is not mounted. Using a boolean (yes/no) value serves as a shortcut to using the target path in this field.
         * @param bool $krbd Always access rbd through krbd kernel module.
         * @param string $lio_tpg target portal group for Linux LIO targets
         * @param string $master_pubkey Base64-encoded, PEM-formatted public RSA key. Used to encrypt a copy of the encryption-key which will be added to each encrypted backup.
         * @param int $maxfiles Deprecated: use 'prune-backups' instead. Maximal number of backup files per VM. Use '0' for unlimited.
         * @param bool $mkdir Create the directory if it doesn't exist.
         * @param string $monhost IP addresses of monitors (for external clusters).
         * @param string $mountpoint mount point
         * @param string $namespace RBD Namespace.
         * @param bool $nocow Set the NOCOW flag on files. Disables data checksumming and causes data errors to be unrecoverable from while allowing direct I/O. Only use this if data does not need to be any more safe than on a single ext4 formatted disk with no underlying raid system.
         * @param string $nodes List of cluster node names.
         * @param bool $nowritecache disable write caching on the target
         * @param string $options NFS mount options (see 'man nfs')
         * @param string $password Password for accessing the share/datastore.
         * @param string $pool Pool.
         * @param int $port For non default port.
         * @param string $prune_backups The retention options with shorter intervals are processed first with --keep-last being the very first one. Each option covers a specific period of time. We say that backups within this period are covered by this option. The next option does not take care of already covered backups and only considers older backups.
         * @param bool $saferemove Zero-out data when removing LVs.
         * @param string $saferemove_throughput Wipe throughput (cstream -t parameter value).
         * @param string $server Server IP or DNS name.
         * @param string $server2 Backup volfile server IP or DNS name.
         * @param bool $shared Mark storage as shared.
         * @param string $smbversion SMB protocol version
         *   Enum: 2.0,2.1,3.0
         * @param bool $sparse use sparse volumes
         * @param string $subdir Subdir to mount.
         * @param bool $tagged_only Only use logical volumes tagged with 'pve-vm-ID'.
         * @param string $transport Gluster transport: tcp or rdma
         *   Enum: tcp,rdma,unix
         * @param string $username RBD Id.
         * @return Result
         */
        public function update($blocksize = null, $bwlimit = null, $comstar_hg = null, $comstar_tg = null, $content = null, $delete = null, $digest = null, $disable = null, $domain = null, $encryption_key = null, $fingerprint = null, $format = null, $fuse = null, $is_mountpoint = null, $krbd = null, $lio_tpg = null, $master_pubkey = null, $maxfiles = null, $mkdir = null, $monhost = null, $mountpoint = null, $namespace = null, $nocow = null, $nodes = null, $nowritecache = null, $options = null, $password = null, $pool = null, $port = null, $prune_backups = null, $saferemove = null, $saferemove_throughput = null, $server = null, $server2 = null, $shared = null, $smbversion = null, $sparse = null, $subdir = null, $tagged_only = null, $transport = null, $username = null) {
            return $this->setRest($blocksize, $bwlimit, $comstar_hg, $comstar_tg, $content, $delete, $digest, $disable, $domain, $encryption_key, $fingerprint, $format, $fuse, $is_mountpoint, $krbd, $lio_tpg, $master_pubkey, $maxfiles, $mkdir, $monhost, $mountpoint, $namespace, $nocow, $nodes, $nowritecache, $options, $password, $pool, $port, $prune_backups, $saferemove, $saferemove_throughput, $server, $server2, $shared, $smbversion, $sparse, $subdir, $tagged_only, $transport, $username);
        }

    }

    /**
     * Class PVEAccess
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccess {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $users;

        /**
         * Get AccessUsers
         * @return PVEAccessUsers
         */
        public function getUsers() {
            return $this->users ?: ($this->users = new PVEAccessUsers($this->client));
        }

        /**
         * @ignore
         */
        private $groups;

        /**
         * Get AccessGroups
         * @return PVEAccessGroups
         */
        public function getGroups() {
            return $this->groups ?: ($this->groups = new PVEAccessGroups($this->client));
        }

        /**
         * @ignore
         */
        private $roles;

        /**
         * Get AccessRoles
         * @return PVEAccessRoles
         */
        public function getRoles() {
            return $this->roles ?: ($this->roles = new PVEAccessRoles($this->client));
        }

        /**
         * @ignore
         */
        private $acl;

        /**
         * Get AccessAcl
         * @return PVEAccessAcl
         */
        public function getAcl() {
            return $this->acl ?: ($this->acl = new PVEAccessAcl($this->client));
        }

        /**
         * @ignore
         */
        private $domains;

        /**
         * Get AccessDomains
         * @return PVEAccessDomains
         */
        public function getDomains() {
            return $this->domains ?: ($this->domains = new PVEAccessDomains($this->client));
        }

        /**
         * @ignore
         */
        private $openid;

        /**
         * Get AccessOpenid
         * @return PVEAccessOpenid
         */
        public function getOpenid() {
            return $this->openid ?: ($this->openid = new PVEAccessOpenid($this->client));
        }

        /**
         * @ignore
         */
        private $ticket;

        /**
         * Get AccessTicket
         * @return PVEAccessTicket
         */
        public function getTicket() {
            return $this->ticket ?: ($this->ticket = new PVEAccessTicket($this->client));
        }

        /**
         * @ignore
         */
        private $password;

        /**
         * Get AccessPassword
         * @return PVEAccessPassword
         */
        public function getPassword() {
            return $this->password ?: ($this->password = new PVEAccessPassword($this->client));
        }

        /**
         * @ignore
         */
        private $tfa;

        /**
         * Get AccessTfa
         * @return PVEAccessTfa
         */
        public function getTfa() {
            return $this->tfa ?: ($this->tfa = new PVEAccessTfa($this->client));
        }

        /**
         * @ignore
         */
        private $permissions;

        /**
         * Get AccessPermissions
         * @return PVEAccessPermissions
         */
        public function getPermissions() {
            return $this->permissions ?: ($this->permissions = new PVEAccessPermissions($this->client));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEAccessUsers
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessUsers {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemUsersAccessUserid
         * @param userid
         * @return PVEItemUsersAccessUserid
         */
        public function get($userid) {
            return new PVEItemUsersAccessUserid($this->client, $userid);
        }

        /**
         * User index.
         * @param bool $enabled Optional filter for enable property.
         * @param bool $full Include group and token information.
         * @return Result
         */
        public function getRest($enabled = null, $full = null) {
            $params = ['enabled' => $enabled,
                'full' => $full];
            return $this->client->get("/access/users", $params);
        }

        /**
         * User index.
         * @param bool $enabled Optional filter for enable property.
         * @param bool $full Include group and token information.
         * @return Result
         */
        public function index($enabled = null, $full = null) {
            return $this->getRest($enabled, $full);
        }

        /**
         * Create new user.
         * @param string $userid User ID
         * @param string $comment 
         * @param string $email 
         * @param bool $enable Enable the account (default). You can set this to '0' to disable the account
         * @param int $expire Account expiration date (seconds since epoch). '0' means no expiration date.
         * @param string $firstname 
         * @param string $groups 
         * @param string $keys Keys for two factor auth (yubico).
         * @param string $lastname 
         * @param string $password Initial password.
         * @return Result
         */
        public function createRest($userid, $comment = null, $email = null, $enable = null, $expire = null, $firstname = null, $groups = null, $keys = null, $lastname = null, $password = null) {
            $params = ['userid' => $userid,
                'comment' => $comment,
                'email' => $email,
                'enable' => $enable,
                'expire' => $expire,
                'firstname' => $firstname,
                'groups' => $groups,
                'keys' => $keys,
                'lastname' => $lastname,
                'password' => $password];
            return $this->client->create("/access/users", $params);
        }

        /**
         * Create new user.
         * @param string $userid User ID
         * @param string $comment 
         * @param string $email 
         * @param bool $enable Enable the account (default). You can set this to '0' to disable the account
         * @param int $expire Account expiration date (seconds since epoch). '0' means no expiration date.
         * @param string $firstname 
         * @param string $groups 
         * @param string $keys Keys for two factor auth (yubico).
         * @param string $lastname 
         * @param string $password Initial password.
         * @return Result
         */
        public function createUser($userid, $comment = null, $email = null, $enable = null, $expire = null, $firstname = null, $groups = null, $keys = null, $lastname = null, $password = null) {
            return $this->createRest($userid, $comment, $email, $enable, $expire, $firstname, $groups, $keys, $lastname, $password);
        }

    }

    /**
     * Class PVEItemUsersAccessUserid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemUsersAccessUserid {

        /**
         * @ignore
         */
        private $userid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $userid) {
            $this->client = $client;
            $this->userid = $userid;
        }

        /**
         * @ignore
         */
        private $tfa;

        /**
         * Get UseridUsersAccessTfa
         * @return PVEUseridUsersAccessTfa
         */
        public function getTfa() {
            return $this->tfa ?: ($this->tfa = new PVEUseridUsersAccessTfa($this->client, $this->userid));
        }

        /**
         * @ignore
         */
        private $token;

        /**
         * Get UseridUsersAccessToken
         * @return PVEUseridUsersAccessToken
         */
        public function getToken() {
            return $this->token ?: ($this->token = new PVEUseridUsersAccessToken($this->client, $this->userid));
        }

        /**
         * Delete user.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/access/users/{$this->userid}");
        }

        /**
         * Delete user.
         * @return Result
         */
        public function deleteUser() {
            return $this->deleteRest();
        }

        /**
         * Get user configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/users/{$this->userid}");
        }

        /**
         * Get user configuration.
         * @return Result
         */
        public function readUser() {
            return $this->getRest();
        }

        /**
         * Update user configuration.
         * @param bool $append 
         * @param string $comment 
         * @param string $email 
         * @param bool $enable Enable the account (default). You can set this to '0' to disable the account
         * @param int $expire Account expiration date (seconds since epoch). '0' means no expiration date.
         * @param string $firstname 
         * @param string $groups 
         * @param string $keys Keys for two factor auth (yubico).
         * @param string $lastname 
         * @return Result
         */
        public function setRest($append = null, $comment = null, $email = null, $enable = null, $expire = null, $firstname = null, $groups = null, $keys = null, $lastname = null) {
            $params = ['append' => $append,
                'comment' => $comment,
                'email' => $email,
                'enable' => $enable,
                'expire' => $expire,
                'firstname' => $firstname,
                'groups' => $groups,
                'keys' => $keys,
                'lastname' => $lastname];
            return $this->client->set("/access/users/{$this->userid}", $params);
        }

        /**
         * Update user configuration.
         * @param bool $append 
         * @param string $comment 
         * @param string $email 
         * @param bool $enable Enable the account (default). You can set this to '0' to disable the account
         * @param int $expire Account expiration date (seconds since epoch). '0' means no expiration date.
         * @param string $firstname 
         * @param string $groups 
         * @param string $keys Keys for two factor auth (yubico).
         * @param string $lastname 
         * @return Result
         */
        public function updateUser($append = null, $comment = null, $email = null, $enable = null, $expire = null, $firstname = null, $groups = null, $keys = null, $lastname = null) {
            return $this->setRest($append, $comment, $email, $enable, $expire, $firstname, $groups, $keys, $lastname);
        }

    }

    /**
     * Class PVEUseridUsersAccessTfa
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEUseridUsersAccessTfa {

        /**
         * @ignore
         */
        private $userid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $userid) {
            $this->client = $client;
            $this->userid = $userid;
        }

        /**
         * Get user TFA types (Personal and Realm).
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/users/{$this->userid}/tfa");
        }

        /**
         * Get user TFA types (Personal and Realm).
         * @return Result
         */
        public function readUserTfaType() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEUseridUsersAccessToken
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEUseridUsersAccessToken {

        /**
         * @ignore
         */
        private $userid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $userid) {
            $this->client = $client;
            $this->userid = $userid;
        }

        /**
         * Get ItemTokenUseridUsersAccessTokenid
         * @param tokenid
         * @return PVEItemTokenUseridUsersAccessTokenid
         */
        public function get($tokenid) {
            return new PVEItemTokenUseridUsersAccessTokenid($this->client, $this->userid, $tokenid);
        }

        /**
         * Get user API tokens.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/users/{$this->userid}/token");
        }

        /**
         * Get user API tokens.
         * @return Result
         */
        public function tokenIndex() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEItemTokenUseridUsersAccessTokenid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemTokenUseridUsersAccessTokenid {

        /**
         * @ignore
         */
        private $userid;

        /**
         * @ignore
         */
        private $tokenid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $userid, $tokenid) {
            $this->client = $client;
            $this->userid = $userid;
            $this->tokenid = $tokenid;
        }

        /**
         * Remove API token for a specific user.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/access/users/{$this->userid}/token/{$this->tokenid}");
        }

        /**
         * Remove API token for a specific user.
         * @return Result
         */
        public function removeToken() {
            return $this->deleteRest();
        }

        /**
         * Get specific API token information.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/users/{$this->userid}/token/{$this->tokenid}");
        }

        /**
         * Get specific API token information.
         * @return Result
         */
        public function readToken() {
            return $this->getRest();
        }

        /**
         * Generate a new API token for a specific user. NOTE: returns API token value, which needs to be stored as it cannot be retrieved afterwards!
         * @param string $comment 
         * @param int $expire API token expiration date (seconds since epoch). '0' means no expiration date.
         * @param bool $privsep Restrict API token privileges with separate ACLs (default), or give full privileges of corresponding user.
         * @return Result
         */
        public function createRest($comment = null, $expire = null, $privsep = null) {
            $params = ['comment' => $comment,
                'expire' => $expire,
                'privsep' => $privsep];
            return $this->client->create("/access/users/{$this->userid}/token/{$this->tokenid}", $params);
        }

        /**
         * Generate a new API token for a specific user. NOTE: returns API token value, which needs to be stored as it cannot be retrieved afterwards!
         * @param string $comment 
         * @param int $expire API token expiration date (seconds since epoch). '0' means no expiration date.
         * @param bool $privsep Restrict API token privileges with separate ACLs (default), or give full privileges of corresponding user.
         * @return Result
         */
        public function generateToken($comment = null, $expire = null, $privsep = null) {
            return $this->createRest($comment, $expire, $privsep);
        }

        /**
         * Update API token for a specific user.
         * @param string $comment 
         * @param int $expire API token expiration date (seconds since epoch). '0' means no expiration date.
         * @param bool $privsep Restrict API token privileges with separate ACLs (default), or give full privileges of corresponding user.
         * @return Result
         */
        public function setRest($comment = null, $expire = null, $privsep = null) {
            $params = ['comment' => $comment,
                'expire' => $expire,
                'privsep' => $privsep];
            return $this->client->set("/access/users/{$this->userid}/token/{$this->tokenid}", $params);
        }

        /**
         * Update API token for a specific user.
         * @param string $comment 
         * @param int $expire API token expiration date (seconds since epoch). '0' means no expiration date.
         * @param bool $privsep Restrict API token privileges with separate ACLs (default), or give full privileges of corresponding user.
         * @return Result
         */
        public function updateTokenInfo($comment = null, $expire = null, $privsep = null) {
            return $this->setRest($comment, $expire, $privsep);
        }

    }

    /**
     * Class PVEAccessGroups
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessGroups {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemGroupsAccessGroupid
         * @param groupid
         * @return PVEItemGroupsAccessGroupid
         */
        public function get($groupid) {
            return new PVEItemGroupsAccessGroupid($this->client, $groupid);
        }

        /**
         * Group index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/groups");
        }

        /**
         * Group index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create new group.
         * @param string $groupid 
         * @param string $comment 
         * @return Result
         */
        public function createRest($groupid, $comment = null) {
            $params = ['groupid' => $groupid,
                'comment' => $comment];
            return $this->client->create("/access/groups", $params);
        }

        /**
         * Create new group.
         * @param string $groupid 
         * @param string $comment 
         * @return Result
         */
        public function createGroup($groupid, $comment = null) {
            return $this->createRest($groupid, $comment);
        }

    }

    /**
     * Class PVEItemGroupsAccessGroupid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemGroupsAccessGroupid {

        /**
         * @ignore
         */
        private $groupid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $groupid) {
            $this->client = $client;
            $this->groupid = $groupid;
        }

        /**
         * Delete group.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/access/groups/{$this->groupid}");
        }

        /**
         * Delete group.
         * @return Result
         */
        public function deleteGroup() {
            return $this->deleteRest();
        }

        /**
         * Get group configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/groups/{$this->groupid}");
        }

        /**
         * Get group configuration.
         * @return Result
         */
        public function readGroup() {
            return $this->getRest();
        }

        /**
         * Update group data.
         * @param string $comment 
         * @return Result
         */
        public function setRest($comment = null) {
            $params = ['comment' => $comment];
            return $this->client->set("/access/groups/{$this->groupid}", $params);
        }

        /**
         * Update group data.
         * @param string $comment 
         * @return Result
         */
        public function updateGroup($comment = null) {
            return $this->setRest($comment);
        }

    }

    /**
     * Class PVEAccessRoles
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessRoles {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemRolesAccessRoleid
         * @param roleid
         * @return PVEItemRolesAccessRoleid
         */
        public function get($roleid) {
            return new PVEItemRolesAccessRoleid($this->client, $roleid);
        }

        /**
         * Role index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/roles");
        }

        /**
         * Role index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create new role.
         * @param string $roleid 
         * @param string $privs 
         * @return Result
         */
        public function createRest($roleid, $privs = null) {
            $params = ['roleid' => $roleid,
                'privs' => $privs];
            return $this->client->create("/access/roles", $params);
        }

        /**
         * Create new role.
         * @param string $roleid 
         * @param string $privs 
         * @return Result
         */
        public function createRole($roleid, $privs = null) {
            return $this->createRest($roleid, $privs);
        }

    }

    /**
     * Class PVEItemRolesAccessRoleid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemRolesAccessRoleid {

        /**
         * @ignore
         */
        private $roleid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $roleid) {
            $this->client = $client;
            $this->roleid = $roleid;
        }

        /**
         * Delete role.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/access/roles/{$this->roleid}");
        }

        /**
         * Delete role.
         * @return Result
         */
        public function deleteRole() {
            return $this->deleteRest();
        }

        /**
         * Get role configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/roles/{$this->roleid}");
        }

        /**
         * Get role configuration.
         * @return Result
         */
        public function readRole() {
            return $this->getRest();
        }

        /**
         * Update an existing role.
         * @param bool $append 
         * @param string $privs 
         * @return Result
         */
        public function setRest($append = null, $privs = null) {
            $params = ['append' => $append,
                'privs' => $privs];
            return $this->client->set("/access/roles/{$this->roleid}", $params);
        }

        /**
         * Update an existing role.
         * @param bool $append 
         * @param string $privs 
         * @return Result
         */
        public function updateRole($append = null, $privs = null) {
            return $this->setRest($append, $privs);
        }

    }

    /**
     * Class PVEAccessAcl
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessAcl {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get Access Control List (ACLs).
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/acl");
        }

        /**
         * Get Access Control List (ACLs).
         * @return Result
         */
        public function readAcl() {
            return $this->getRest();
        }

        /**
         * Update Access Control List (add or remove permissions).
         * @param string $path Access control path
         * @param string $roles List of roles.
         * @param bool $delete Remove permissions (instead of adding it).
         * @param string $groups List of groups.
         * @param bool $propagate Allow to propagate (inherit) permissions.
         * @param string $tokens List of API tokens.
         * @param string $users List of users.
         * @return Result
         */
        public function setRest($path, $roles, $delete = null, $groups = null, $propagate = null, $tokens = null, $users = null) {
            $params = ['path' => $path,
                'roles' => $roles,
                'delete' => $delete,
                'groups' => $groups,
                'propagate' => $propagate,
                'tokens' => $tokens,
                'users' => $users];
            return $this->client->set("/access/acl", $params);
        }

        /**
         * Update Access Control List (add or remove permissions).
         * @param string $path Access control path
         * @param string $roles List of roles.
         * @param bool $delete Remove permissions (instead of adding it).
         * @param string $groups List of groups.
         * @param bool $propagate Allow to propagate (inherit) permissions.
         * @param string $tokens List of API tokens.
         * @param string $users List of users.
         * @return Result
         */
        public function updateAcl($path, $roles, $delete = null, $groups = null, $propagate = null, $tokens = null, $users = null) {
            return $this->setRest($path, $roles, $delete, $groups, $propagate, $tokens, $users);
        }

    }

    /**
     * Class PVEAccessDomains
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessDomains {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemDomainsAccessRealm
         * @param realm
         * @return PVEItemDomainsAccessRealm
         */
        public function get($realm) {
            return new PVEItemDomainsAccessRealm($this->client, $realm);
        }

        /**
         * Authentication domain index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/domains");
        }

        /**
         * Authentication domain index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Add an authentication server.
         * @param string $realm Authentication domain ID
         * @param string $type Realm type.
         *   Enum: ad,ldap,openid,pam,pve
         * @param bool $autocreate Automatically create users if they do not exist.
         * @param string $base_dn LDAP base domain name
         * @param string $bind_dn LDAP bind domain name
         * @param string $capath Path to the CA certificate store
         * @param bool $case_sensitive username is case-sensitive
         * @param string $cert Path to the client certificate
         * @param string $certkey Path to the client certificate key
         * @param string $client_id OpenID Client ID
         * @param string $client_key OpenID Client Key
         * @param string $comment Description.
         * @param bool $default Use this as default realm
         * @param string $domain AD domain name
         * @param string $filter LDAP filter for user sync.
         * @param string $group_classes The objectclasses for groups.
         * @param string $group_dn LDAP base domain name for group sync. If not set, the base_dn will be used.
         * @param string $group_filter LDAP filter for group sync.
         * @param string $group_name_attr LDAP attribute representing a groups name. If not set or found, the first value of the DN will be used as name.
         * @param string $issuer_url OpenID Issuer Url
         * @param string $mode LDAP protocol mode.
         *   Enum: ldap,ldaps,ldap+starttls
         * @param string $password LDAP bind password. Will be stored in '/etc/pve/priv/realm/&amp;lt;REALM&amp;gt;.pw'.
         * @param int $port Server port.
         * @param bool $secure Use secure LDAPS protocol. DEPRECATED: use 'mode' instead.
         * @param string $server1 Server IP address (or DNS name)
         * @param string $server2 Fallback Server IP address (or DNS name)
         * @param string $sslversion LDAPS TLS/SSL version. It's not recommended to use version older than 1.2!
         *   Enum: tlsv1,tlsv1_1,tlsv1_2,tlsv1_3
         * @param string $sync_defaults_options The default options for behavior of synchronizations.
         * @param string $sync_attributes Comma separated list of key=value pairs for specifying which LDAP attributes map to which PVE user field. For example, to map the LDAP attribute 'mail' to PVEs 'email', write  'email=mail'. By default, each PVE user field is represented  by an LDAP attribute of the same name.
         * @param string $tfa Use Two-factor authentication.
         * @param string $user_attr LDAP user attribute name
         * @param string $user_classes The objectclasses for users.
         * @param string $username_claim OpenID claim used to generate the unique username.
         *   Enum: subject,username,email
         * @param bool $verify Verify the server's SSL certificate
         * @return Result
         */
        public function createRest($realm, $type, $autocreate = null, $base_dn = null, $bind_dn = null, $capath = null, $case_sensitive = null, $cert = null, $certkey = null, $client_id = null, $client_key = null, $comment = null, $default = null, $domain = null, $filter = null, $group_classes = null, $group_dn = null, $group_filter = null, $group_name_attr = null, $issuer_url = null, $mode = null, $password = null, $port = null, $secure = null, $server1 = null, $server2 = null, $sslversion = null, $sync_defaults_options = null, $sync_attributes = null, $tfa = null, $user_attr = null, $user_classes = null, $username_claim = null, $verify = null) {
            $params = ['realm' => $realm,
                'type' => $type,
                'autocreate' => $autocreate,
                'base_dn' => $base_dn,
                'bind_dn' => $bind_dn,
                'capath' => $capath,
                'case-sensitive' => $case_sensitive,
                'cert' => $cert,
                'certkey' => $certkey,
                'client-id' => $client_id,
                'client-key' => $client_key,
                'comment' => $comment,
                'default' => $default,
                'domain' => $domain,
                'filter' => $filter,
                'group_classes' => $group_classes,
                'group_dn' => $group_dn,
                'group_filter' => $group_filter,
                'group_name_attr' => $group_name_attr,
                'issuer-url' => $issuer_url,
                'mode' => $mode,
                'password' => $password,
                'port' => $port,
                'secure' => $secure,
                'server1' => $server1,
                'server2' => $server2,
                'sslversion' => $sslversion,
                'sync-defaults-options' => $sync_defaults_options,
                'sync_attributes' => $sync_attributes,
                'tfa' => $tfa,
                'user_attr' => $user_attr,
                'user_classes' => $user_classes,
                'username-claim' => $username_claim,
                'verify' => $verify];
            return $this->client->create("/access/domains", $params);
        }

        /**
         * Add an authentication server.
         * @param string $realm Authentication domain ID
         * @param string $type Realm type.
         *   Enum: ad,ldap,openid,pam,pve
         * @param bool $autocreate Automatically create users if they do not exist.
         * @param string $base_dn LDAP base domain name
         * @param string $bind_dn LDAP bind domain name
         * @param string $capath Path to the CA certificate store
         * @param bool $case_sensitive username is case-sensitive
         * @param string $cert Path to the client certificate
         * @param string $certkey Path to the client certificate key
         * @param string $client_id OpenID Client ID
         * @param string $client_key OpenID Client Key
         * @param string $comment Description.
         * @param bool $default Use this as default realm
         * @param string $domain AD domain name
         * @param string $filter LDAP filter for user sync.
         * @param string $group_classes The objectclasses for groups.
         * @param string $group_dn LDAP base domain name for group sync. If not set, the base_dn will be used.
         * @param string $group_filter LDAP filter for group sync.
         * @param string $group_name_attr LDAP attribute representing a groups name. If not set or found, the first value of the DN will be used as name.
         * @param string $issuer_url OpenID Issuer Url
         * @param string $mode LDAP protocol mode.
         *   Enum: ldap,ldaps,ldap+starttls
         * @param string $password LDAP bind password. Will be stored in '/etc/pve/priv/realm/&amp;lt;REALM&amp;gt;.pw'.
         * @param int $port Server port.
         * @param bool $secure Use secure LDAPS protocol. DEPRECATED: use 'mode' instead.
         * @param string $server1 Server IP address (or DNS name)
         * @param string $server2 Fallback Server IP address (or DNS name)
         * @param string $sslversion LDAPS TLS/SSL version. It's not recommended to use version older than 1.2!
         *   Enum: tlsv1,tlsv1_1,tlsv1_2,tlsv1_3
         * @param string $sync_defaults_options The default options for behavior of synchronizations.
         * @param string $sync_attributes Comma separated list of key=value pairs for specifying which LDAP attributes map to which PVE user field. For example, to map the LDAP attribute 'mail' to PVEs 'email', write  'email=mail'. By default, each PVE user field is represented  by an LDAP attribute of the same name.
         * @param string $tfa Use Two-factor authentication.
         * @param string $user_attr LDAP user attribute name
         * @param string $user_classes The objectclasses for users.
         * @param string $username_claim OpenID claim used to generate the unique username.
         *   Enum: subject,username,email
         * @param bool $verify Verify the server's SSL certificate
         * @return Result
         */
        public function create($realm, $type, $autocreate = null, $base_dn = null, $bind_dn = null, $capath = null, $case_sensitive = null, $cert = null, $certkey = null, $client_id = null, $client_key = null, $comment = null, $default = null, $domain = null, $filter = null, $group_classes = null, $group_dn = null, $group_filter = null, $group_name_attr = null, $issuer_url = null, $mode = null, $password = null, $port = null, $secure = null, $server1 = null, $server2 = null, $sslversion = null, $sync_defaults_options = null, $sync_attributes = null, $tfa = null, $user_attr = null, $user_classes = null, $username_claim = null, $verify = null) {
            return $this->createRest($realm, $type, $autocreate, $base_dn, $bind_dn, $capath, $case_sensitive, $cert, $certkey, $client_id, $client_key, $comment, $default, $domain, $filter, $group_classes, $group_dn, $group_filter, $group_name_attr, $issuer_url, $mode, $password, $port, $secure, $server1, $server2, $sslversion, $sync_defaults_options, $sync_attributes, $tfa, $user_attr, $user_classes, $username_claim, $verify);
        }

    }

    /**
     * Class PVEItemDomainsAccessRealm
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemDomainsAccessRealm {

        /**
         * @ignore
         */
        private $realm;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $realm) {
            $this->client = $client;
            $this->realm = $realm;
        }

        /**
         * @ignore
         */
        private $sync;

        /**
         * Get RealmDomainsAccessSync
         * @return PVERealmDomainsAccessSync
         */
        public function getSync() {
            return $this->sync ?: ($this->sync = new PVERealmDomainsAccessSync($this->client, $this->realm));
        }

        /**
         * Delete an authentication server.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/access/domains/{$this->realm}");
        }

        /**
         * Delete an authentication server.
         * @return Result
         */
        public function delete() {
            return $this->deleteRest();
        }

        /**
         * Get auth server configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/domains/{$this->realm}");
        }

        /**
         * Get auth server configuration.
         * @return Result
         */
        public function read() {
            return $this->getRest();
        }

        /**
         * Update authentication server settings.
         * @param bool $autocreate Automatically create users if they do not exist.
         * @param string $base_dn LDAP base domain name
         * @param string $bind_dn LDAP bind domain name
         * @param string $capath Path to the CA certificate store
         * @param bool $case_sensitive username is case-sensitive
         * @param string $cert Path to the client certificate
         * @param string $certkey Path to the client certificate key
         * @param string $client_id OpenID Client ID
         * @param string $client_key OpenID Client Key
         * @param string $comment Description.
         * @param bool $default Use this as default realm
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $domain AD domain name
         * @param string $filter LDAP filter for user sync.
         * @param string $group_classes The objectclasses for groups.
         * @param string $group_dn LDAP base domain name for group sync. If not set, the base_dn will be used.
         * @param string $group_filter LDAP filter for group sync.
         * @param string $group_name_attr LDAP attribute representing a groups name. If not set or found, the first value of the DN will be used as name.
         * @param string $issuer_url OpenID Issuer Url
         * @param string $mode LDAP protocol mode.
         *   Enum: ldap,ldaps,ldap+starttls
         * @param string $password LDAP bind password. Will be stored in '/etc/pve/priv/realm/&amp;lt;REALM&amp;gt;.pw'.
         * @param int $port Server port.
         * @param bool $secure Use secure LDAPS protocol. DEPRECATED: use 'mode' instead.
         * @param string $server1 Server IP address (or DNS name)
         * @param string $server2 Fallback Server IP address (or DNS name)
         * @param string $sslversion LDAPS TLS/SSL version. It's not recommended to use version older than 1.2!
         *   Enum: tlsv1,tlsv1_1,tlsv1_2,tlsv1_3
         * @param string $sync_defaults_options The default options for behavior of synchronizations.
         * @param string $sync_attributes Comma separated list of key=value pairs for specifying which LDAP attributes map to which PVE user field. For example, to map the LDAP attribute 'mail' to PVEs 'email', write  'email=mail'. By default, each PVE user field is represented  by an LDAP attribute of the same name.
         * @param string $tfa Use Two-factor authentication.
         * @param string $user_attr LDAP user attribute name
         * @param string $user_classes The objectclasses for users.
         * @param bool $verify Verify the server's SSL certificate
         * @return Result
         */
        public function setRest($autocreate = null, $base_dn = null, $bind_dn = null, $capath = null, $case_sensitive = null, $cert = null, $certkey = null, $client_id = null, $client_key = null, $comment = null, $default = null, $delete = null, $digest = null, $domain = null, $filter = null, $group_classes = null, $group_dn = null, $group_filter = null, $group_name_attr = null, $issuer_url = null, $mode = null, $password = null, $port = null, $secure = null, $server1 = null, $server2 = null, $sslversion = null, $sync_defaults_options = null, $sync_attributes = null, $tfa = null, $user_attr = null, $user_classes = null, $verify = null) {
            $params = ['autocreate' => $autocreate,
                'base_dn' => $base_dn,
                'bind_dn' => $bind_dn,
                'capath' => $capath,
                'case-sensitive' => $case_sensitive,
                'cert' => $cert,
                'certkey' => $certkey,
                'client-id' => $client_id,
                'client-key' => $client_key,
                'comment' => $comment,
                'default' => $default,
                'delete' => $delete,
                'digest' => $digest,
                'domain' => $domain,
                'filter' => $filter,
                'group_classes' => $group_classes,
                'group_dn' => $group_dn,
                'group_filter' => $group_filter,
                'group_name_attr' => $group_name_attr,
                'issuer-url' => $issuer_url,
                'mode' => $mode,
                'password' => $password,
                'port' => $port,
                'secure' => $secure,
                'server1' => $server1,
                'server2' => $server2,
                'sslversion' => $sslversion,
                'sync-defaults-options' => $sync_defaults_options,
                'sync_attributes' => $sync_attributes,
                'tfa' => $tfa,
                'user_attr' => $user_attr,
                'user_classes' => $user_classes,
                'verify' => $verify];
            return $this->client->set("/access/domains/{$this->realm}", $params);
        }

        /**
         * Update authentication server settings.
         * @param bool $autocreate Automatically create users if they do not exist.
         * @param string $base_dn LDAP base domain name
         * @param string $bind_dn LDAP bind domain name
         * @param string $capath Path to the CA certificate store
         * @param bool $case_sensitive username is case-sensitive
         * @param string $cert Path to the client certificate
         * @param string $certkey Path to the client certificate key
         * @param string $client_id OpenID Client ID
         * @param string $client_key OpenID Client Key
         * @param string $comment Description.
         * @param bool $default Use this as default realm
         * @param string $delete A list of settings you want to delete.
         * @param string $digest Prevent changes if current configuration file has different SHA1 digest. This can be used to prevent concurrent modifications.
         * @param string $domain AD domain name
         * @param string $filter LDAP filter for user sync.
         * @param string $group_classes The objectclasses for groups.
         * @param string $group_dn LDAP base domain name for group sync. If not set, the base_dn will be used.
         * @param string $group_filter LDAP filter for group sync.
         * @param string $group_name_attr LDAP attribute representing a groups name. If not set or found, the first value of the DN will be used as name.
         * @param string $issuer_url OpenID Issuer Url
         * @param string $mode LDAP protocol mode.
         *   Enum: ldap,ldaps,ldap+starttls
         * @param string $password LDAP bind password. Will be stored in '/etc/pve/priv/realm/&amp;lt;REALM&amp;gt;.pw'.
         * @param int $port Server port.
         * @param bool $secure Use secure LDAPS protocol. DEPRECATED: use 'mode' instead.
         * @param string $server1 Server IP address (or DNS name)
         * @param string $server2 Fallback Server IP address (or DNS name)
         * @param string $sslversion LDAPS TLS/SSL version. It's not recommended to use version older than 1.2!
         *   Enum: tlsv1,tlsv1_1,tlsv1_2,tlsv1_3
         * @param string $sync_defaults_options The default options for behavior of synchronizations.
         * @param string $sync_attributes Comma separated list of key=value pairs for specifying which LDAP attributes map to which PVE user field. For example, to map the LDAP attribute 'mail' to PVEs 'email', write  'email=mail'. By default, each PVE user field is represented  by an LDAP attribute of the same name.
         * @param string $tfa Use Two-factor authentication.
         * @param string $user_attr LDAP user attribute name
         * @param string $user_classes The objectclasses for users.
         * @param bool $verify Verify the server's SSL certificate
         * @return Result
         */
        public function update($autocreate = null, $base_dn = null, $bind_dn = null, $capath = null, $case_sensitive = null, $cert = null, $certkey = null, $client_id = null, $client_key = null, $comment = null, $default = null, $delete = null, $digest = null, $domain = null, $filter = null, $group_classes = null, $group_dn = null, $group_filter = null, $group_name_attr = null, $issuer_url = null, $mode = null, $password = null, $port = null, $secure = null, $server1 = null, $server2 = null, $sslversion = null, $sync_defaults_options = null, $sync_attributes = null, $tfa = null, $user_attr = null, $user_classes = null, $verify = null) {
            return $this->setRest($autocreate, $base_dn, $bind_dn, $capath, $case_sensitive, $cert, $certkey, $client_id, $client_key, $comment, $default, $delete, $digest, $domain, $filter, $group_classes, $group_dn, $group_filter, $group_name_attr, $issuer_url, $mode, $password, $port, $secure, $server1, $server2, $sslversion, $sync_defaults_options, $sync_attributes, $tfa, $user_attr, $user_classes, $verify);
        }

    }

    /**
     * Class PVERealmDomainsAccessSync
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVERealmDomainsAccessSync {

        /**
         * @ignore
         */
        private $realm;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $realm) {
            $this->client = $client;
            $this->realm = $realm;
        }

        /**
         * Syncs users and/or groups from the configured LDAP to user.cfg. NOTE: Synced groups will have the name 'name-$realm', so make sure those groups do not exist to prevent overwriting.
         * @param bool $dry_run If set, does not write anything.
         * @param bool $enable_new Enable newly synced users immediately.
         * @param bool $full If set, uses the LDAP Directory as source of truth, deleting users or groups not returned from the sync. Otherwise only syncs information which is not already present, and does not deletes or modifies anything else.
         * @param bool $purge Remove ACLs for users or groups which were removed from the config during a sync.
         * @param string $scope Select what to sync.
         *   Enum: users,groups,both
         * @return Result
         */
        public function createRest($dry_run = null, $enable_new = null, $full = null, $purge = null, $scope = null) {
            $params = ['dry-run' => $dry_run,
                'enable-new' => $enable_new,
                'full' => $full,
                'purge' => $purge,
                'scope' => $scope];
            return $this->client->create("/access/domains/{$this->realm}/sync", $params);
        }

        /**
         * Syncs users and/or groups from the configured LDAP to user.cfg. NOTE: Synced groups will have the name 'name-$realm', so make sure those groups do not exist to prevent overwriting.
         * @param bool $dry_run If set, does not write anything.
         * @param bool $enable_new Enable newly synced users immediately.
         * @param bool $full If set, uses the LDAP Directory as source of truth, deleting users or groups not returned from the sync. Otherwise only syncs information which is not already present, and does not deletes or modifies anything else.
         * @param bool $purge Remove ACLs for users or groups which were removed from the config during a sync.
         * @param string $scope Select what to sync.
         *   Enum: users,groups,both
         * @return Result
         */
        public function sync($dry_run = null, $enable_new = null, $full = null, $purge = null, $scope = null) {
            return $this->createRest($dry_run, $enable_new, $full, $purge, $scope);
        }

    }

    /**
     * Class PVEAccessOpenid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessOpenid {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * @ignore
         */
        private $auth_Url;

        /**
         * Get OpenidAccessAuth_Url
         * @return PVEOpenidAccessAuth_Url
         */
        public function getAuth_Url() {
            return $this->auth_Url ?: ($this->auth_Url = new PVEOpenidAccessAuth_Url($this->client));
        }

        /**
         * @ignore
         */
        private $login;

        /**
         * Get OpenidAccessLogin
         * @return PVEOpenidAccessLogin
         */
        public function getLogin() {
            return $this->login ?: ($this->login = new PVEOpenidAccessLogin($this->client));
        }

        /**
         * Directory index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/openid");
        }

        /**
         * Directory index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

    }

    /**
     * Class PVEOpenidAccessAuth_Url
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEOpenidAccessAuth_Url {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get the OpenId Authorization Url for the specified realm.
         * @param string $realm Authentication domain ID
         * @param string $redirect_url Redirection Url. The client should set this to the used server url (location.origin).
         * @return Result
         */
        public function createRest($realm, $redirect_url) {
            $params = ['realm' => $realm,
                'redirect-url' => $redirect_url];
            return $this->client->create("/access/openid/auth-url", $params);
        }

        /**
         * Get the OpenId Authorization Url for the specified realm.
         * @param string $realm Authentication domain ID
         * @param string $redirect_url Redirection Url. The client should set this to the used server url (location.origin).
         * @return Result
         */
        public function authUrl($realm, $redirect_url) {
            return $this->createRest($realm, $redirect_url);
        }

    }

    /**
     * Class PVEOpenidAccessLogin
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEOpenidAccessLogin {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         *  Verify OpenID authorization code and create a ticket.
         * @param string $code OpenId authorization code.
         * @param string $redirect_url Redirection Url. The client should set this to the used server url (location.origin).
         * @param string $state OpenId state.
         * @return Result
         */
        public function createRest($code, $redirect_url, $state) {
            $params = ['code' => $code,
                'redirect-url' => $redirect_url,
                'state' => $state];
            return $this->client->create("/access/openid/login", $params);
        }

        /**
         *  Verify OpenID authorization code and create a ticket.
         * @param string $code OpenId authorization code.
         * @param string $redirect_url Redirection Url. The client should set this to the used server url (location.origin).
         * @param string $state OpenId state.
         * @return Result
         */
        public function login($code, $redirect_url, $state) {
            return $this->createRest($code, $redirect_url, $state);
        }

    }

    /**
     * Class PVEAccessTicket
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessTicket {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Dummy. Useful for formatters which want to provide a login page.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/access/ticket");
        }

        /**
         * Dummy. Useful for formatters which want to provide a login page.
         * @return Result
         */
        public function getTicket() {
            return $this->getRest();
        }

        /**
         * Create or verify authentication ticket.
         * @param string $password The secret password. This can also be a valid ticket.
         * @param string $username User name
         * @param string $otp One-time password for Two-factor authentication.
         * @param string $path Verify ticket, and check if user have access 'privs' on 'path'
         * @param string $privs Verify ticket, and check if user have access 'privs' on 'path'
         * @param string $realm You can optionally pass the realm using this parameter. Normally the realm is simply added to the username &amp;lt;username&amp;gt;@&amp;lt;relam&amp;gt;.
         * @return Result
         */
        public function createRest($password, $username, $otp = null, $path = null, $privs = null, $realm = null) {
            $params = ['password' => $password,
                'username' => $username,
                'otp' => $otp,
                'path' => $path,
                'privs' => $privs,
                'realm' => $realm];
            return $this->client->create("/access/ticket", $params);
        }

        /**
         * Create or verify authentication ticket.
         * @param string $password The secret password. This can also be a valid ticket.
         * @param string $username User name
         * @param string $otp One-time password for Two-factor authentication.
         * @param string $path Verify ticket, and check if user have access 'privs' on 'path'
         * @param string $privs Verify ticket, and check if user have access 'privs' on 'path'
         * @param string $realm You can optionally pass the realm using this parameter. Normally the realm is simply added to the username &amp;lt;username&amp;gt;@&amp;lt;relam&amp;gt;.
         * @return Result
         */
        public function createTicket($password, $username, $otp = null, $path = null, $privs = null, $realm = null) {
            return $this->createRest($password, $username, $otp, $path, $privs, $realm);
        }

    }

    /**
     * Class PVEAccessPassword
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessPassword {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Change user password.
         * @param string $password The new password.
         * @param string $userid User ID
         * @return Result
         */
        public function setRest($password, $userid) {
            $params = ['password' => $password,
                'userid' => $userid];
            return $this->client->set("/access/password", $params);
        }

        /**
         * Change user password.
         * @param string $password The new password.
         * @param string $userid User ID
         * @return Result
         */
        public function changePassword($password, $userid) {
            return $this->setRest($password, $userid);
        }

    }

    /**
     * Class PVEAccessTfa
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessTfa {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Finish a u2f challenge.
         * @param string $response The response to the current authentication challenge.
         * @return Result
         */
        public function createRest($response) {
            $params = ['response' => $response];
            return $this->client->create("/access/tfa", $params);
        }

        /**
         * Finish a u2f challenge.
         * @param string $response The response to the current authentication challenge.
         * @return Result
         */
        public function verifyTfa($response) {
            return $this->createRest($response);
        }

        /**
         * Change user u2f authentication.
         * @param string $action The action to perform
         *   Enum: delete,new,confirm
         * @param string $userid User ID
         * @param string $config A TFA configuration. This must currently be of type TOTP of not set at all.
         * @param string $key When adding TOTP, the shared secret value.
         * @param string $password The current password.
         * @param string $response Either the the response to the current u2f registration challenge, or, when adding TOTP, the currently valid TOTP value.
         * @return Result
         */
        public function setRest($action, $userid, $config = null, $key = null, $password = null, $response = null) {
            $params = ['action' => $action,
                'userid' => $userid,
                'config' => $config,
                'key' => $key,
                'password' => $password,
                'response' => $response];
            return $this->client->set("/access/tfa", $params);
        }

        /**
         * Change user u2f authentication.
         * @param string $action The action to perform
         *   Enum: delete,new,confirm
         * @param string $userid User ID
         * @param string $config A TFA configuration. This must currently be of type TOTP of not set at all.
         * @param string $key When adding TOTP, the shared secret value.
         * @param string $password The current password.
         * @param string $response Either the the response to the current u2f registration challenge, or, when adding TOTP, the currently valid TOTP value.
         * @return Result
         */
        public function changeTfa($action, $userid, $config = null, $key = null, $password = null, $response = null) {
            return $this->setRest($action, $userid, $config, $key, $password, $response);
        }

    }

    /**
     * Class PVEAccessPermissions
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEAccessPermissions {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Retrieve effective permissions of given user/token.
         * @param string $path Only dump this specific path, not the whole tree.
         * @param string $userid User ID or full API token ID
         * @return Result
         */
        public function getRest($path = null, $userid = null) {
            $params = ['path' => $path,
                'userid' => $userid];
            return $this->client->get("/access/permissions", $params);
        }

        /**
         * Retrieve effective permissions of given user/token.
         * @param string $path Only dump this specific path, not the whole tree.
         * @param string $userid User ID or full API token ID
         * @return Result
         */
        public function permissions($path = null, $userid = null) {
            return $this->getRest($path, $userid);
        }

    }

    /**
     * Class PVEPools
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEPools {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * Get ItemPoolsPoolid
         * @param poolid
         * @return PVEItemPoolsPoolid
         */
        public function get($poolid) {
            return new PVEItemPoolsPoolid($this->client, $poolid);
        }

        /**
         * Pool index.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/pools");
        }

        /**
         * Pool index.
         * @return Result
         */
        public function index() {
            return $this->getRest();
        }

        /**
         * Create new pool.
         * @param string $poolid 
         * @param string $comment 
         * @return Result
         */
        public function createRest($poolid, $comment = null) {
            $params = ['poolid' => $poolid,
                'comment' => $comment];
            return $this->client->create("/pools", $params);
        }

        /**
         * Create new pool.
         * @param string $poolid 
         * @param string $comment 
         * @return Result
         */
        public function createPool($poolid, $comment = null) {
            return $this->createRest($poolid, $comment);
        }

    }

    /**
     * Class PVEItemPoolsPoolid
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEItemPoolsPoolid {

        /**
         * @ignore
         */
        private $poolid;

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client, $poolid) {
            $this->client = $client;
            $this->poolid = $poolid;
        }

        /**
         * Delete pool.
         * @return Result
         */
        public function deleteRest() {
            return $this->client->delete("/pools/{$this->poolid}");
        }

        /**
         * Delete pool.
         * @return Result
         */
        public function deletePool() {
            return $this->deleteRest();
        }

        /**
         * Get pool configuration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/pools/{$this->poolid}");
        }

        /**
         * Get pool configuration.
         * @return Result
         */
        public function readPool() {
            return $this->getRest();
        }

        /**
         * Update pool data.
         * @param string $comment 
         * @param bool $delete Remove vms/storage (instead of adding it).
         * @param string $storage List of storage IDs.
         * @param string $vms List of virtual machines.
         * @return Result
         */
        public function setRest($comment = null, $delete = null, $storage = null, $vms = null) {
            $params = ['comment' => $comment,
                'delete' => $delete,
                'storage' => $storage,
                'vms' => $vms];
            return $this->client->set("/pools/{$this->poolid}", $params);
        }

        /**
         * Update pool data.
         * @param string $comment 
         * @param bool $delete Remove vms/storage (instead of adding it).
         * @param string $storage List of storage IDs.
         * @param string $vms List of virtual machines.
         * @return Result
         */
        public function updatePool($comment = null, $delete = null, $storage = null, $vms = null) {
            return $this->setRest($comment, $delete, $storage, $vms);
        }

    }

    /**
     * Class PVEVersion
     * @package Corsinvest\VE\ProxmoxVE\Api 
     */
    class PVEVersion {

        /**
         * @ignore
         */
        private $client;

        /**
         * @ignore
         */
        function __construct($client) {
            $this->client = $client;
        }

        /**
         * API version details. The result also includes the global datacenter confguration.
         * @return Result
         */
        public function getRest() {
            return $this->client->get("/version");
        }

        /**
         * API version details. The result also includes the global datacenter confguration.
         * @return Result
         */
        public function version() {
            return $this->getRest();
        }

    }

}