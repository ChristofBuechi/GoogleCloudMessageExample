package ch.christofbuechi.testgcm;

import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * Created by christof on 26.11.14.
 */
public class MyWrapper {

    @JsonProperty("registration_id")
    private String registration_id;

    @JsonProperty("data")
    private MyData data;


    public String getRegistration_id() {
        return registration_id;
    }

    public void setRegistration_id(String registration_id) {
        this.registration_id = registration_id;
    }

    public MyData getData() {
        return data;
    }

    public void setData(MyData data) {
        this.data = data;
    }


}
