import React from "react";
import { Modal } from "antd";

const ConfirationModal = ({ handleOk, handleCancel, title, ...rest }) => {
  return (
    <Modal
      okButtonProps={{ danger: true }}
      closeIcon={null}
      title={title}
      open
      onOk={handleOk}
      onCancel={handleCancel}
      {...rest}
    />
  );
};
export default ConfirationModal;
