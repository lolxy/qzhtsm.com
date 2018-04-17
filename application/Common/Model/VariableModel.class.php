<?php
namespace Common\Model;
use Common\Model\CommonModel;
class VariableModel extends CommonModel
{
	
	protected $_validate = array(
			//array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
			array('variableName', 'require', '变量名称不能为空！', 1, 'regex', CommonModel:: MODEL_INSERT ),
			array('variableValue', 'require', '变量值不能为空！', 1, 'regex', CommonModel:: MODEL_BOTH),
			array('variableName','','变量名已经存在！',0,'unique',CommonModel:: MODEL_BOTH), 
			array('variableName','/^[a-zA-Z][a-zA-Z0-9_]{2,15}$/','变量名不合法！（字母开头,允许3-16字节,允许字母数字下划线）',1,'regex',CommonModel::MODEL_BOTH), 
	);
	
}

