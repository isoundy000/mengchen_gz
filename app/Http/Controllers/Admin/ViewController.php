<?php
/**
 * Created by PhpStorm.
 * User: liudian
 * Date: 8/31/17
 * Time: 09:56
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest as Request;

class ViewController extends Controller
{
    public function home(Request $request)
    {
        return view('admin.home');
    }

    public function statementHourly(Request $request)
    {
        return view('admin.statement.hourly');
    }

    public function statementDaily(Request $request)
    {
        return view('admin.statement.daily');
    }

    public function statementMonthly(Request $request)
    {
        return view('admin.statement.monthly');
    }

    public function playerList(Request $request)
    {
        return view('admin.player.list');
    }

    public function gmNotificationMarquee(Request $request)
    {
        return view('admin.gm.notification.marquee');
    }

    public function gmNotificationLogin(Request $request)
    {
        return view('admin.gm.notification.login');
    }

    public function gmRoomFriend(Request $request)
    {
        return view('admin.gm.room.friend');
    }

    public function gmRoomCoin(Request $request)
    {
        return view('admin.gm.room.coin');
    }

    public function gmAiList(Request $request)
    {
        return view('admin.gm.ai.list');
    }

    public function gmWhitelistList(Request $request)
    {
        return view('admin.gm.whitelist.list');
    }

    public function gmServerList(Request $request)
    {
        return view('admin.gm.server.list');
    }

    public function stockApplyRequest(Request $request)
    {
        return view('admin.stock.apply-request');
    }

    public function stockApplyList(Request $request)
    {
        return view('admin.stock.apply-list');
    }

    public function stockApplyHistory(Request $request)
    {
        return view('admin.stock.apply-history');
    }

    public function agentList(Request $request)
    {
        return view('admin.agent.list');
    }

    public function agentCreate(Request $request)
    {
        return view('admin.agent.create');
    }

    public function topUpAdmin(Request $request)
    {
        return view('admin.top-up.admin');
    }

    public function topUpAgent(Request $request)
    {
        return view('admin.top-up.agent');
    }

    public function topUpPlayer(Request $request)
    {
        return view('admin.top-up.player');
    }

    public function orderWechat(Request $request)
    {
        return view('admin.order.wechat');
    }

    public function orderItem(Request $request)
    {
        return view('admin.order.item');
    }

    public function systemLog(Request $request)
    {
        return view('admin.system.log');
    }

    public function funcSwitch(Request $request)
    {
        return view('admin.gm.server.func-switch');
    }

    public function statementSummary(Request $request)
    {
        return view('admin.statement.summary');
    }
}