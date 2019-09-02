<?php declare(strict_types=1);


namespace Jeekens\Process;


use Jeekens\Server\Process\JKProcess;

/**
 * Interface UserProcessInterface
 *
 * @package Jeekens\Process
 */
interface UserProcessInterface
{

    /**
     * 进程名称
     *
     * @return string
     */
    public function name(): string;

    /**
     * 是否重定向进程标准输入输出
     *
     * @return bool
     */
    public function redirectStdinStdout() : bool;

    /**
     * 管道类型
     *
     * @return int
     */
    public function pipeType(): int;

    /**
     * 是否开启携程
     *
     * @return bool
     */
    public function enableCoroutine(): bool;

    /**
     * 进程处理方法
     *
     * @param $server
     * @param JKProcess $process
     */
    public function handle($server, JKProcess $process);

}