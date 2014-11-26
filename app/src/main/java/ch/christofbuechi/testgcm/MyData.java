package ch.christofbuechi.testgcm;

import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * Created by christof on 26.11.14.
 */
public class MyData {

    @JsonProperty("msg")
    private String msg;

    @JsonProperty("v")
    private String v;

    @JsonProperty("ct")
    private String ct;

    public String getMsg() {
        return msg;
    }

    public void setMsg(String msg) {
        this.msg = msg;
    }

    public String getCt() {
        return ct;
    }

    public void setCt(String ct) {
        this.ct = ct;
    }

    public String getV() {
        return v;
    }

    public void setV(String v) {
        this.v = v;
    }


}
