"use client";

import emailjs from "@emailjs/browser";
import { useRef, useState } from "react";
import { useForm } from "react-hook-form";
import { BsRocketTakeoffFill } from "react-icons/bs";
import ChunkyButton from "../ChunkyButton";

type FormData = {
  name: string;
  email: string;
  phoneNumber?: string;
  subject: string;
  content: string;
};

const ContactForm = () => {
  const [formStatus, setFormStatus] = useState<null | string>(null);
  const formRef = useRef<HTMLFormElement>(null);

  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<FormData>();

  const sendEmail = () => {
    if (formRef.current) {
      emailjs
        .sendForm(
          process.env.NEXT_PUBLIC_EMAILJS_SERVICE_ID!,
          process.env.NEXT_PUBLIC_EMAILJS_TEMPLATE_ID!,
          formRef.current,
          {
            publicKey: process.env.NEXT_PUBLIC_EMAILJS_PUBLIC_KEY!,
          }
        )
        .then(
          () => {
            setFormStatus("Email sent successfully!");
          },
          (error) => {
            console.error("Failed to send email:", error);
            setFormStatus("Failed to send email.");
          }
        );
    }
  };

  return (
    <form
      ref={formRef}
      onSubmit={handleSubmit(sendEmail)}
      className="space-y-4"
    >
      <div>
        <label htmlFor="name">Name*</label>
        <input
          id="name"
          {...register("name", { required: "Name is required" })}
          className="border p-2 w-full"
        />
        {errors.name && <p className="text-[red]">{errors.name.message}</p>}
      </div>

      <div>
        <label htmlFor="email">Email*</label>
        <input
          id="email"
          type="email"
          {...register("email", {
            required: "Email is required",
            pattern: {
              value: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/,
              message: "Invalid email address",
            },
          })}
          className="border p-2 w-full"
        />
        {errors.email && <p className="text-[red]">{errors.email.message}</p>}
      </div>

      <div>
        <label htmlFor="phoneNumber">Phone Number</label>
        <input
          id="phoneNumber"
          {...register("phoneNumber")}
          className="border p-2 w-full"
        />
      </div>

      <div>
        <label htmlFor="subject">Subject*</label>
        <input
          id="subject"
          {...register("subject", { required: "Subject is required" })}
          className="border p-2 w-full"
        />
        {errors.subject && (
          <p className="text-[red]">{errors.subject.message}</p>
        )}
      </div>

      <div>
        <label htmlFor="content">Message*</label>
        <textarea
          id="content"
          {...register("content", { required: "Message content is required" })}
          className="border p-2 w-full"
          rows={5}
        />
        {errors.content && (
          <p className="text-[red]">{errors.content.message}</p>
        )}
      </div>

      <div className="w-full flex justify-center">
        <ChunkyButton type="submit" className="bg-white">
          <span>Send</span>
          <BsRocketTakeoffFill size={30} className="p-1" />
        </ChunkyButton>
      </div>

      {formStatus && <p>{formStatus}</p>}
    </form>
  );
};

export default ContactForm;
